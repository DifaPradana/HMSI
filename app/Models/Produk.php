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
        'id_kategori',
        'berat_produk',
        'stok_produk',
    ];

    protected $foreignKeys = [
        'id_kategori' => 'id_kategori',
    ];

    public function pembelian()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function kategori()
    {
        return $this->belongsTo(KategoriProduk::class, 'id_kategori');
    }
}
