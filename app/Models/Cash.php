<?php

namespace App\Models;

use App\Models\Mobil;
use App\Models\Pembeli;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cash extends Model
{
    use HasFactory;

    protected $table = 'cash';

    protected $primaryKey = 'kode_cash';

    protected $keyType = 'string';

    protected $fillable = [
        'kode_cash',
        'ktp_pembeli',
        'kode_mobil',
        'tgl_beli_cash',
        'bayar_cash'
    ];

    public function mobil() {
        return $this->hasOne(Mobil::class, 'kode_mobil', 'kode_mobil');
    }

    public function pembeli() {
        return $this->hasOne(Pembeli::class, 'ktp_pembeli', 'ktp_pembeli');
    }

    /**
     * Mengambil kode unik setiap bulan
     *
     * @return string $kode_transaksi
     */
    public static function get_code()
    {
        // $example_code = "C20210920001";
        $latest_code = Cash::where(DB::raw('substr(kode_cash, 6, 2)'), '=', date('m'))->orderBy('kode_cash', 'DESC')->first('kode_cash');
        $next_code = $latest_code ? (int) substr($latest_code->kode_cash, '9', '3') + 1 : 1;
        $new_code = "C" . date("Ymd") . str_pad($next_code, 3, '0', STR_PAD_LEFT);
        return $new_code;
    }
}
