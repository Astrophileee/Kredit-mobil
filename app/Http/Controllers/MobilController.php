<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MobilController extends Controller
{

    protected $imagePath;

    public function __construct()
    {
        $this->imagePath = public_path('image/mobil/');
    }

    public function index()
    {
        return view('admin.mobil.index',[
            'cars' => Mobil::all()
        ]);
        
    }

    public function create()
    {
        return view('admin.mobil.create',[
            'cars' => Mobil::all()
        ]);
    }

    public function store(Request $request)
    {

        $kode_mobil = Mobil::get_code($request->merk);


        if ($request->has('image')) {
            $file = $request->file('image');
            $image = $file->hashName();
            $file->move($this->imagePath, $image);
        } else {
            $image = null;
        }


        $cars = Mobil::create([
            'kode_mobil' => $kode_mobil,
            'nama' => $request->nama,
            'merk' => $request->merk,
            'type' => $request->type,
            'warna' => $request->warna,
            'harga_mobil' => $request->harga_mobil,
            'image' => $image
        ]);
        return redirect('admin/mobil');
    }

    public function edit($kode_mobil)
    {
        $cars = Mobil::findOrFail($kode_mobil);
        return view('admin/mobil/edit', [
            'cars' => $cars
        ]);
    }

    public function update(Request $request, $kode_mobil)
    {
        $cars = Mobil::findOrFail($kode_mobil);
        $kode_mobil = Mobil::get_code($request->merk);

        if ($request->has('image')) {
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

        return redirect()->route('mobil.index');
    }

    public function destroy($kode_mobil)
    {
        $cars = Mobil::findOrFail($kode_mobil);
        if ($cars->image && file_exists($this->imagePath . $cars->image)) {
            unlink($this->imagePath . $cars->image);
        }
        $cars->delete();
        return redirect()->route('mobil.index');
    }
}
