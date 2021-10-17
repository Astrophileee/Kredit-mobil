<?php

namespace App\Http\Controllers;

use App\Models\mobil2;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Mobil2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->imagePath = public_path('image/mobil/');
    }

    public function index()
    {
        return view('admin.mobil2.index',[
            'cars' => Mobil2::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mobil2.create',[
            'cars' => Mobil2::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kode_mobil = Mobil2::get_code($request->merk);


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->hashName();
            $file->move($this->imagePath, $image);
        } else {
            $image = null;
        }


        $cars = Mobil2::create([
            'kode_mobil' => $kode_mobil,
            'nama' => $request->nama,
            'merk' => $request->merk,
            'type' => $request->type,
            'warna' => $request->warna,
            'harga_mobil' => $request->harga_mobil,
            'image' => $image
        ]);
        return redirect('admin/mobil2');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\mobil2  $mobil2
     * @return \Illuminate\Http\Response
     */
    public function show(mobil2 $mobil2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mobil2  $mobil2
     * @return \Illuminate\Http\Response
     */
    public function edit(mobil2 $mobil2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mobil2  $mobil2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode_mobil)
    {
        $cars = Mobil2::findOrFail($kode_mobil);
        $kode_mobil = Mobil2::get_code($request->merk);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->hashName();
            $file->move($this->imagePath, $image);

            if (file_exists($this->imagePath . $cars->image)) {
                unlink($this->imagePath . $cars->image);
            }
        } else {
            $image = $cars->image;
        }


        $cars->update([
            'kode_mobil' => $kode_mobil,
            'merk' => $request->merk,
            'nama' => $request->nama,
            'type' => $request->type,
            'warna' => $request->warna,
            'harga_mobil' => $request->harga_mobil,
            'image' => $image
        ]);

        return redirect()->route('mobil2.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mobil2  $mobil2
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode_mobil)
    {
        $cars = Mobil2::findOrFail($kode_mobil);
        if ($cars->image && file_exists($this->imagePath . $cars->image)) {
            unlink($this->imagePath . $cars->image);
        }
        $cars->delete();
        return redirect()->route('mobil2.index');
    }
}
