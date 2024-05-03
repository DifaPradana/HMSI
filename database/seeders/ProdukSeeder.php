<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert([
            [
                'nama_produk' => 'Laptop ASUS',
                'deskripsi_produk' => 'Laptop ASUS dengan spesifikasi tertinggi',
                'harga_produk' => 10000000,
                'kategori_produk' => 'komputer',
                'berat_produk' => 2,
                'stok_produk' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Smartphone Samsung',
                'deskripsi_produk' => 'Smartphone Samsung dengan kamera 108MP',
                'harga_produk' => 8000000,
                'kategori_produk' => 'elektronik',
                'berat_produk' => 0.5,
                'stok_produk' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Kamera Canon',
                'deskripsi_produk' => 'Kamera Canon dengan lensa 50mm',
                'harga_produk' => 12000000,
                'kategori_produk' => 'elektronik',
                'berat_produk' => 1,
                'stok_produk' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Mechanical Keyboard',
                'deskripsi_produk' => 'Click Click Cetak Cetak',
                'harga_produk' => 12000000,
                'kategori_produk' => 'komputer',
                'berat_produk' => 2,
                'stok_produk' => 50,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_produk' => 'Mouse Gaming',
                'deskripsi_produk' => 'Nice Clicks for Gaming',
                'harga_produk' => 120000,
                'kategori_produk' => 'komputer',
                'berat_produk' => 1,
                'stok_produk' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan data lain sesuai kebutuhan
        ]);
    }
}
