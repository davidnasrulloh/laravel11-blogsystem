<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model // ambil dari tabel posts
{
    protected $table = 'blog_posts'; // default jamak dari model post = posts
    // protected $primaryKey = 'post_id'; // if primary key not id
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // public static function find($slug): array
    // {
    //     // Callback function
    //     // return Arr::first(static::all(), function($post) use ($slug){
    //     //     return $post['slug'] == $slug;
    //     // });

    //     // Arrow function
    //     $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    //     if(! $post){
    //         abort(404);
    //     }

    //     return $post;
    // }


}
