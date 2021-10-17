<?php

namespace App\Http\Controllers;

use App\Models\Cash;
use App\Models\Mobil;
use App\Models\Kredit;
use App\Models\Pembeli;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class CashController extends Controller
{

    public function index()
    {
        return view('admin.cash.index', [
            'cars' => Mobil::all(),
            'buyers' => Pembeli::all(),
            'cash' => Cash::all()
        ]);
    }

    public function create()
    {
        $data_mobil = Mobil::whereNotIn('kode_mobil', Cash::pluck('kode_mobil')->all())->whereNotIn('kode_mobil', Kredit::pluck('kode_mobil')->all())->get();
        $buyers = Pembeli::all();
        return view('admin.cash.create', [
            'cars' => $data_mobil,
            'buyers' => $buyers,
            'cash' => Cash::all()
        ]);
    }

    public function store(Request $request)
    {
        $mobil = Mobil::find($request->kode_mobil);
        $qRules = [
            'kode_mobil' => 'required|exists:mobil,kode_mobil|unique:cash,kode_mobil|unique:kredit,kode_mobil',
            'bayar_cash' => ($mobil) ? 'required|numeric|min:' . $mobil->harga_mobil : 'required|numeric',
        ];

        if ($request->has('daftar_pembeli_baru')) {
            $qRules['ktp_pembeli'] =  'required|unique:pembeli,ktp_pembeli';
            $qRules['nama_pembeli'] = 'required';
            $qRules['alamat_pembeli'] = 'required';
            $qRules['telpon_pembeli'] = 'required';
        } else {
            $qRules['ktp_pembeli_lama'] = 'required|exists:pembeli,ktp_pembeli';
        }
        $request->validate($qRules);



        $kode_cash = Cash::get_code();

        if ($request->has('daftar_pembeli_baru')) {
            $pembeli = Pembeli::create([
                'ktp_pembeli' => $request->ktp_pembeli,
                'nama_pembeli' => $request->nama_pembeli,
                'alamat_pembeli' => $request->alamat_pembeli,
                'telpon_pembeli' => $request->telpon_pembeli,
            ]);

            $ktp = $request->ktp_pembeli;
        } else {
            $ktp = $request->ktp_pembeli_lama;
        }

        Cash::create([
            'kode_cash' => $kode_cash,
            'kode_mobil' => $mobil->kode_mobil,
            'ktp_pembeli' => $ktp,
            'bayar_cash' => $request->bayar_cash,
            'tgl_beli_cash' => date('Y-m-d H:i:s')
        ]);

        return redirect()->to('/admin/cash')->with('success', 'Pembelian cash berhasil ditambahkan')->with('print-nota', "<script>$(document).ready(function() {
            window.open('cash/" . $kode_cash . "/cetak-nota', '_blank');
        })</script>");
    }

    public function edit($kode_cash)
    {
        $cash = Cash::findOrFail($kode_cash);
        return view('admin/cash/edit', [
            'cars' => Mobil::all(),
            'buyers' => Pembeli::all(),
            'cash' => $cash
        ]);
    }

    public function update(Request $request, $kode_cash)
    {
        $cash = Cash::findOrFail($kode_cash);
        $rules = [
            'kode_mobil' => ['required', 'exists:mobil,kode_mobil', 'alpha_num'],
            'ktp_pembeli' => ['required', 'exists:pembeli,ktp_pembeli'],
            'tgl_beli_cash' => ['required'],
            'bayar_cash' => ['required', 'numeric'],
        ];

        $request->validate($rules);

        $cash->update([
            'ktp_pembeli' => $request->ktp_pembeli,
            'kode_mobil' => $request->kode_mobil,
            'tgl_beli_cash' => $request->tgl_beli_cash,
            'bayar_cash' => $request->bayar_cash,
        ]);

        return redirect()->route('cash.index');
    }

    public function destroy($kode_cash)
    {
        $cash = Cash::findOrFail($kode_cash);
        $cash->delete();
        return redirect()->route('cash.index');
    }

    public function cetak_nota(Cash $cash)
    {
        $cash->load(['pembeli', 'mobil']);
        $pdf = PDF::loadView('admin.cash.nota_pdf', [
            'cash' => $cash
        ]);
        return $pdf->stream();
    }
}
