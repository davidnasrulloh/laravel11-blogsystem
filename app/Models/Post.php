<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'blog_posts'; // default jamak dari model post = posts
    // protected $primaryKey = 'post_id'; // if primary key not id
    protected $fillable = ['title', 'author', 'slug', 'body'];
}
