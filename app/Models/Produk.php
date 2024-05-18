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

///📌📌📌📌📌 Shortcut
/// Shortcut CTRL + D untuk mengganti nama variabel yang sama
/// Shortcut CTRL + SHIFT + L untuk mengganti semua variabel yang sama
/// Shortcut CTRL + SHIFT + K untuk menghapus baris yang dipilih
/// Shortcut CTRL + SHIFT + ALT + UP/DOWN untuk menambahkan baris di atas/bawah
/// Shortcut CTRL + / untuk memberikan komentar pada baris yang dipilih
/// Shortcut CTRL + SHIFT + / untuk memberikan komentar pada blok yang dipilih
/// Shortcut CTRL + SHIFT + \ untuk menghapus komentar pada blok yang dipilih
/// Shortcut CTRL + SHIFT + F untuk mencari kata kunci pada seluruh proyek
/// Shortcut CTRL + P untuk mencari nama file
/// Shortcut CTRL + B untuk membuka/ menutup sidebar
/// Shortcut CTRL + J untuk membuka/ menutup terminal
/// Shortcut CTRL + K untuk menghapus terminal
/// Shortcut CTRL + SHIFT + P untuk membuka command palette
/// Shortcut CTRL + SHIFT + T untuk membuka tab yang sudah ditutup
/// Shortcut CTRL + TAB untuk berpindah tab
/// Shortcut CTRL + SHIFT + TAB untuk berpindah tab ke kiri
/// Shortcut CTRL + N untuk membuat file baru
/// Shortcut CTRL + S untuk menyimpan file
/// Shortcut CTRL + O untuk membuka file
/// Shortcut CTRL + Z untuk mengembalikan perubahan
/// Shortcut CTRL + Y untuk mengulangi perubahan
/// Shortcut CTRL + X untuk memotong baris yang dipilih
/// Shortcut CTRL + C untuk menyalin baris yang dipilih
/// Shortcut CTRL + V untuk meletakkan baris yang dipilih
/// Shortcut CTRL + A untuk memilih semua baris
/// Shortcut CTRL + F untuk mencari kata kunci
/// Shortcut CTRL + H untuk mengganti kata kunci
/// Shortcut CTRL + G untuk pergi ke baris tertentu
/// Shortcut CTRL + L untuk memilih baris
/// Shortcut CTRL + D untuk memilih kata kunci yang sama
/// Shortcut CTRL + SHIFT + L untuk memilih semua kata kunci yang sama
/// Shortcut CTRL + SHIFT + K untuk menghapus baris yang dipilih
