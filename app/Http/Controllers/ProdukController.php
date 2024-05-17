<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use App\Models\Produk; // Sesuaikan namespace dengan model Anda
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Data Produk',
            'data_produk' => Produk::all(),
            'data_kategori' => KategoriProduk::all(),

        );

        return view('admin.produk', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'id_kategori' => 'required',
            'berat_produk' => 'required',
            'stok_produk' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $produk = [
            'nama_produk' => $request->nama_produk,
            'deskripsi_produk' => $request->deskripsi_produk,
            'harga_produk' => $request->harga_produk,
            'id_kategori' => $request->id_kategori,
            'berat_produk' => $request->berat_produk,
            'stok_produk' => $request->stok_produk,

        ];
        Produk::create($produk);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        // Temukan produk berdasarkan ID
        $produk = Produk::find($id);

        // Jika produk tidak ditemukan, kembalikan error 404
        if (!$produk) {
            return abort(404);
        }

        // Validasi data yang diterima
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'deskripsi_produk' => 'required',
            'harga_produk' => 'required',
            'id_kategori' => 'required',
            'berat_produk' => 'required',
            'stok_produk' => 'required',
        ]);

        // Jika validasi gagal, redirect kembali dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        // Perbarui produk dengan data baru
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi_produk = $request->deskripsi_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->id_kategori = $request->id_kategori;
        $produk->berat_produk = $request->berat_produk;
        $produk->stok_produk = $request->stok_produk;
        $produk->save();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil diperbarui');
    }

    public function destroy($id)
    {
        // Temukan produk berdasarkan ID
        $produk = Produk::find($id);

        // Jika produk tidak ditemukan, kembalikan error 404
        if (!$produk) {
            return abort(404);
        }

        // Hapus produk
        $produk->delete();

        // Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Produk berhasil dihapus');
    }
}
