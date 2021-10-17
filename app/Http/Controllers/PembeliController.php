<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{


    public function index()
    {
        return view('admin.pembeli.index',[
            'buyers' => Pembeli::all()
        ]);
        
    }
    public function create()
    {
        return view('admin.pembeli.create',[
            'buyers' => Pembeli::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ktp_pembeli' => 'required|min:15|max:120|unique:pembeli,ktp_pembeli',
            'telpon_pembeli' => 'required|min:10|max:13|unique:pembeli,telpon_pembeli'
        ]);


        $buyers = Pembeli::create([
            'ktp_pembeli' => $request->ktp_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'telpon_pembeli' => $request->telpon_pembeli
        ]);
        return redirect('admin/pembeli');
    }

    public function edit($ktp_pembeli)
    {
        $buyers = Pembeli::findOrFail($ktp_pembeli);
        return view('admin/pembeli/edit', [
            'buyers' => $buyers
        ]);
    }

    public function update(Request $request, $ktp_pembeli)
    {
        $buyers = Pembeli::findOrFail($ktp_pembeli);

        $buyers->update([
            'ktp_pembeli' => $request->ktp_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'telpon_pembeli' => $request->telpon_pembeli
        ]);

        return redirect()->route('pembeli.index');
    }

    public function destroy($ktp_pembeli)
    {
        $buyers = Pembeli::findOrFail($ktp_pembeli);
        $buyers->delete();
        return redirect()->route('pembeli.index');
    }
}


