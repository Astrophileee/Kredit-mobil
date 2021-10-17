<?php

namespace App\Http\Controllers;

use App\Models\Pembeli2;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Pembeli2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pembeli2.index',[
            'buyers' => Pembeli2::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ktp_pembeli' => 'required|min:15|max:120|unique:pembeli,ktp_pembeli',
            'telpon_pembeli' => 'required|min:10|max:13|unique:pembeli,telpon_pembeli'
        ]);


        $buyers = Pembeli2::create([
            'ktp_pembeli' => $request->ktp_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'telpon_pembeli' => $request->telpon_pembeli
        ]);
        return redirect()->route('pembeli2.index')->with('success', 'Data Telah Di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ktp_pembeli)
    {
        $buyers = Pembeli2::findOrFail($ktp_pembeli);

        $buyers->update([
            'ktp_pembeli' => $request->ktp_pembeli,
            'nama_pembeli' => $request->nama_pembeli,
            'alamat_pembeli' => $request->alamat_pembeli,
            'telpon_pembeli' => $request->telpon_pembeli
        ]);

       

        return redirect()->route('pembeli2.index')->with('success', 'Data Telah Di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($ktp_pembeli)
    {
        $buyers = Pembeli2::findOrFail($ktp_pembeli);
        $buyers->delete();
        return redirect()->route('pembeli2.index');
    }
}
