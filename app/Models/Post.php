<?php 

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Judul Artikel 1',
                'slug' => 'judul-artikel-1',
                'author' => 'David Nasrulloh',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum distinctio ipsam blanditiis ex qui! Adipisci et iure quidem laudantium!'
            ],
            [
                'id' => 2,
                'title' => 'Judul Artikel 2',
                'slug' => 'judul-artikel-2',
                'author' => 'David Nasrulloh',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sed ipsum distinctio ipsam blanditiis ex qui! Adipisci et iure quidem laudantium!'
            ]
        ];
    }

    public static function find($slug): array
    {
        // Callback function
        // return Arr::first(static::all(), function($post) use ($slug){
        //     return $post['slug'] == $slug;
        // });

        // Arrow function
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if(! $post){
            abort(404);
        }

        return $post;
    }
}
