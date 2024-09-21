<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $data['blog'] = BlogModel::getAllBlog()->get();
        $data['no'] = 1;
        return view('yoda.blog.blog', $data);
    }

    public function tambah()
    {
        $data['blog'] = BlogModel::all();
        return view('yoda.blog.blog_tambah', $data);
    }

    public function tambah_action(Request $request)
    {
        $token = uniqid();
        $token_blog = Str::random('13');
        $file = $request->file('thumbnail_blog');
        $file2 = $request->file('foto_blog');
        $judul = $request->judul_blog;
        $kategori = $request->kategori;
        $date = $request->tgl;
        $deskripsi_singkat = $request->deskripsi_singkat;
        $deskripsi_blog = $request->deskripsi_blog;

        $file_name = $token . '.' . $file->getClientOriginalExtension();
        $file_name2 = $token . '.' . $file2->getClientOriginalExtension();

        $data = [
            'token_blog' => $token_blog,
            'judul_blog' => $judul,
            'date' => $date,
            'deskripsi_singkat' => $deskripsi_singkat,
            'deskripsi' => $deskripsi_blog,
            'thumbnail_blog' => $file_name,
            'foto_blog' => $file_name2,
            'kategori_blog' => $kategori
        ];

        $file->move('thumbnail_blog', $file_name);
        $file2->move('foto_blog', $file_name2);
        BlogModel::create($data);
        return redirect('/blog')->with('success', 'Blog berhasil di Simpan');
    }

    public function detail($id)
    {
        $detail = BlogModel::getDetailBlog($id);
        $blog = BlogModel::getAllBlog()->get();
        return view('blog', compact('detail', 'blog'));
    }

    public function edit($id)
    {
        $detail = BlogModel::where('token_blog', $id)->first();
        return view('yoda.blog.blog_edit', compact('detail'));
    }

    public function edit_action($id, Request $request)
    {
        $token = uniqid();
        $token_blog = Str::random('13');
        $file = $request->file('thumbnail_blog');
        $file2 = $request->file('foto_blog');
        $judul = $request->judul_blog;
        $kategori = $request->kategori;
        $date = $request->tgl;
        $deskripsi_singkat = $request->deskripsi_singkat;
        $deskripsi_blog = $request->deskripsi_blog;

        // Ambil data portofolio yang ada untuk mendapatkan nilai foto_project dan thumbnail saat ini
        $blog = BlogModel::where('token_blog', $id)->first();

        $data = [
            'token_blog' => $token_blog,
            'judul_blog' => $judul,
            'date' => $date,
            'deskripsi_singkat' => $deskripsi_singkat,
            'deskripsi' => $deskripsi_blog,
            'kategori_blog' => $kategori
        ];

        if ($file) {
            $file_name = $token . '.' . $file->getClientOriginalExtension();
            $data['thumbnail_blog'] = $file_name;
            $file->move('thumbnail_blog', $file_name);
        } else {
            $data['thumbnail_blog'] = $blog->thumbnail_blog;
        }

        if ($file2) {
            $file_name2 = $token . '.' . $file2->getClientOriginalExtension();
            $data['foto_blog'] = $file_name2;
            $file2->move('foto_blog', $file_name2);
        } else {
            $data['foto_blog'] = $blog->foto_blog;
        }
        BlogModel::where('token_blog', $id)->update($data);
        return redirect('/blog')->with('success', 'Blog berhasil di Simpan');
    }

    public function hapus($id)
    {
        BlogModel::where('token_blog', $id)->delete();
        return redirect('/blog')->with(['success' => 'Berhasil Menghapus Blog']);
    }
}
