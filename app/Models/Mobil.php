<?php

namespace App\Models;

use App\Models\Cash;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobil';
    protected $primaryKey = 'kode_mobil';
    protected $keyType = 'string';
    protected $fillable = ['kode_mobil','nama','merk','type','warna','harga_mobil','image'];

    public function imagePath(){
        if(filter_var($this->image, FILTER_VALIDATE_URL)){
            return $this->image;
        }

        if(!file_exists( public_path('image/mobil/') . $this->image)) {   
            return '/image/nophoto.png';
        }

        return '/image/mobil/' . $this->image;

    }
    public static function get_code($merk)
    {
        // $example_code = "Honda20210001";
        $tahun = date("Y");
        $prefix = strtoupper(substr($merk, 0,3));
        $no_urut = DB::table('mobil')->selectRaw("IFNULL(MAX(SUBSTRING(`kode_mobil`,8,5)),0) + 1 AS no_urut")->whereRaw("SUBSTRING(`kode_mobil`,4,4) = '" . $tahun . "'")->whereRaw("SUBSTRING(`kode_mobil`,1,3) = '". $prefix . "'")->first()->no_urut;
        $kode_mobil = $prefix . $tahun . sprintf("%'.05d", $no_urut);

        return $kode_mobil;
    }
}
