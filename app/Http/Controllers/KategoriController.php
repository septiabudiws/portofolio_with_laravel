<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index()
    {
        $data = [
            'kategori' => KategoriModel::getAllKategori(),
            'no' => 1,
        ];
        return view('yoda.kategori.kategori', $data);
    }

    public function tambah()
    {
        $data['kategori'] = KategoriModel::all();
        return view('yoda.kategori.kategori_tambah', $data);
    }

    public function tambah_action(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $data = [
            'nama_kategori' => $request->nama_kategori
        ];

        KategoriModel::create($data);
        return redirect('/kategori');
    }

    public function edit($id)
    {
        $data['detail'] = KategoriModel::where('id', $id)->first();
        $data['kategori'] = KategoriModel::all();
        return view('yoda.kategori.kategori_edit', $data);
    }

    public function edit_action($id, Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required'
        ]);

        $data = [
            'nama_kategori' => $request->nama_kategori
        ];

        KategoriModel::where('id', $id)->update($data);
        return redirect('/kategori')->with(['success' => 'Berhasil Mengubah Data Operator']);
    }

    public function hapus($id)
    {
        KategoriModel::where('id', $id)->delete();
        return redirect('/kategori')->with(['success' => 'Berhasil Menghapus kategori']);
    }
}
