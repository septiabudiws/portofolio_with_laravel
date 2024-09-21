<?php

namespace App\Http\Controllers;

use App\Models\PortofolioModel;
use App\Models\KategoriModel;
use App\Models\BlogModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $totporto = PortofolioModel::count();
        $portofolio = PortofolioModel::getAllPortofolio()->get();
        $blog = BlogModel::getAllBlog()->get();
        $kategori = KategoriModel::all();
        $no = 1;

        return view('dashboard', compact('totporto', 'portofolio', 'no', 'kategori', 'blog'));
    }
}
