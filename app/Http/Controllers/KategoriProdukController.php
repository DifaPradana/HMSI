<?php

namespace App\Http\Controllers;

use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KategoriProdukController extends Controller
{
    public function index()
    {
        $data = array(
            'title' => 'Kategori Produk',
            'data_kategori' => KategoriProduk::all()
        );

        return view('admin.kategori_produk', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        KategoriProduk::create([
            'nama_kategori' => $request->nama_kategori
        ]);

        return redirect()->back()->with('success', 'Kategori produk berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriProduk::find($id);

        if (!$kategori) {
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'nama_kategori' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return redirect()->back()->with('success', 'Kategori produk berhasil diubah');
    }

    public function destroy($id)
    {
        KategoriProduk::where('id_kategori', $id)->delete();
        return redirect()->back()->with('success', 'Kategori produk berhasil dihapus');
    }
}
