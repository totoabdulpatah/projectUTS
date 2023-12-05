<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inventorys extends Model
{
    use SoftDeletes;
    use HasFactory;
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
