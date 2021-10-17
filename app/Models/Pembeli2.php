<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli2 extends Model
{
    use HasFactory;
    protected $table = 'pembeli2s';
    protected $primaryKey = 'ktp_pembeli';
    protected $fillable = ['ktp_pembeli','nama_pembeli','alamat_pembeli','telpon_pembeli'];
}
