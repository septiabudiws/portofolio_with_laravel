<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $guarded = [];

        public static function getAllBlog(){
        $query = DB::table('blog');
        return $query;
    }

    public static function getDetailBlog($token){
        $query = DB::table('blog')
        ->where('blog.token_blog', $token)->first();
        return $query;
    }
}
