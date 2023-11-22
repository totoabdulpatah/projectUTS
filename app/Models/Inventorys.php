<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventorys extends Model
{
    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'jenis_varian',
        'qty',
        'harga_jual',
        'total_harga',
        'diskon',
        'harga_setelah_diskon'
    ];
    protected $primarykey = 'barang_id';
    protected $table = 'inventorys';
}
