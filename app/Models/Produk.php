<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $guarded = ['id_produk'];

    protected $table = 'produk';

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'deskripsi_produk',
        'harga_produk',
        'kategori_produk',
        'berat_produk',
        'stok_produk',
    ];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }
}
