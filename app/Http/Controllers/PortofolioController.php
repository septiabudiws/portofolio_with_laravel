<?php

namespace App\Http\Controllers;

use App\Models\PortofolioModel;
use App\Models\KategoriModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PortofolioController extends Controller
{
    public function index()
    {
        $data['portofolio'] = PortofolioModel::getAllPortofolio()->get();
        $data['no'] = 1;
        return view('yoda.portofolio.portofolio', $data);
    }

    public function tambah()
    {
        $portofolio = PortofolioModel::all();
        $kategori = KategoriModel::all();
        return view('yoda.portofolio.portofolio_tambah', compact('portofolio', 'kategori'));
    }

    public function tambah_action(Request $request)
    {
        $token = uniqid();
        $token_porto = Str::random('13');
        $file = $request->file('thumbnail');
        $file2 = $request->file('foto_project');
        $file3 = $request->file('foto_project2');
        $nama_project = $request->nama_project;
        $nama_client = $request->nama_client;
        $date = $request->date;
        $link = $request->Link;
        $deskripsi = $request->deskripsi;
        $kategori_id = $request->kategori_id;

        $file_name = $token . '.' . $file->getClientOriginalExtension();
        $file_name2 = $token . '.' . $file2->getClientOriginalExtension();
        $file_name3 = $token . '.' . $file3->getClientOriginalExtension();

        $data = [
            'token_porto' => $token_porto,
            'nama_project' => $nama_project,
            'nama_client' => $nama_client,
            'link' => $link,
            'date' => $date,
            'kategori_id' => $kategori_id,
            'deskripsi' => $deskripsi,
            'foto_project2' => $file_name3,
            'foto_project' => $file_name2,
            'thumbnail' => $file_name,
        ];

        $file->move('thumbnail', $file_name);
        $file2->move('foto_project1', $file_name2);
        $file3->move('foto_project2', $file_name3);
        PortofolioModel::create($data);
        return redirect('/porto')->with('success', 'Portofolio berhasil di Simpan');
    }

    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {

            $token = Str::random(12);

            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $token . '.' . $extension;

            $request->file('upload')->move(public_path('portofolio'), $fileName);

            $url = asset('portofolio/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    public function edit($id)
    {
        $detail = PortofolioModel::where('token_porto', $id)->first();
        $kategori = KategoriModel::all();
        return view('yoda.portofolio.portofolio_edit', compact('detail', 'kategori'));
    }

    public function edit_action($id, Request $request)
    {
        $token = uniqid();
        $token_porto = Str::random('13');
        $file = $request->file('thumbnail');
        $file2 = $request->file('foto_project');
        $file3 = $request->file('foto_project2');
        $nama_project = $request->nama_project;
        $nama_client = $request->nama_client;
        $date = $request->date;
        $link = $request->Link;
        $deskripsi = $request->deskripsi;
        $kategori_id = $request->kategori_id;

        // Ambil data portofolio yang ada untuk mendapatkan nilai foto_project dan thumbnail saat ini
        $portofolio = PortofolioModel::where('token_porto', $id)->first();

        $data = [
            'token_porto' => $token_porto,
            'nama_project' => $nama_project,
            'nama_client' => $nama_client,
            'link' => $link,
            'date' => $date,
            'kategori_id' => $kategori_id,
            'deskripsi' => $deskripsi,
        ];

        if ($file) {
            $file_name = $token . '.' . $file->getClientOriginalExtension();
            $data['thumbnail'] = $file_name;
            $file->move('thumbnail', $file_name);
        } else {
            $data['thumbnail'] = $portofolio->thumbnail;
        }

        if ($file2) {
            $file_name2 = $token . '.' . $file2->getClientOriginalExtension();
            $data['foto_project'] = $file_name2;
            $file2->move('foto_project1', $file_name2);
        } else {
            $data['foto_project'] = $portofolio->foto_project;
        }

        if ($file3) {
            $file_name3 = $token . '.' . $file3->getClientOriginalExtension();
            $data['foto_project2'] = $file_name3;
            $file3->move('foto_project2', $file_name3);
        } else {
            $data['foto_project2'] = $portofolio->foto_project2;
        }
        PortofolioModel::where('token_porto', $id)->update($data);
        return redirect('/porto')->with('success', 'Portofolio berhasil di Simpan');
    }

    public function hapus($id)
    {
        PortofolioModel::where('token_porto', $id)->delete();
        return redirect('/porto')->with(['success' => 'Berhasil Menghapus Data Operator']);
    }

    public function detail($id)
    {
        $detail = PortofolioModel::getDetailPorto($id);
        return view('portofolio', compact('detail'));
    }
}
