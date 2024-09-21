<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $guarded = [];

        public static function getAllKategori(){
        $query = DB::table('kategori')
        ->leftJoin('portofolio', 'portofolio.kategori_id', '=', 'kategori.id')
        ->groupBy('kategori.nama_kategori', 'kategori.id', 'kategori.created_at')
        ->orderBy('kategori.id')
        ->get(['kategori.id','kategori.nama_kategori', 'kategori.created_at']);
        return $query;
    }
}
