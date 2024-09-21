<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PortofolioModel extends Model
{
    use HasFactory;

    protected $table = 'portofolio';

    protected $guarded = [];

        public static function getAllPortofolio(){
            $query = DB::table('portofolio')
            ->join('kategori', 'portofolio.kategori_id', '=', 'kategori.id');
        return $query;
    }

    public static function getDetailPorto($token){
        $query = DB::table('portofolio')
        ->join('kategori', 'portofolio.kategori_id', '=', 'kategori.id')
        ->where('portofolio.token_porto', $token)->first();
        return $query;
    }
}
