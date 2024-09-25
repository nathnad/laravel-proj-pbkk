<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all() {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Nadia Nathania',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptates ut culpa, itaque, fugit id distinctio alias esse aliquam, minus neque quasi adipisci a doloribus molestiae temporibus ab consectetur quas pariatur.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Nadia Nathania',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti libero assumenda cupiditate aspernatur voluptatibus! Aperiam necessitatibus et, porro ipsa ducimus adipisci corrupti doloremque maxime, sit nam quos culpa sint harum!'
            ]
        ];
    }

    public static function find($slug): array {
    #    return Arr::first(static::all(), function($post) use ($slug) {
    #        return $post['slug'] == $slug;
    #    });

        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug );
        
        if(!$post) {
            abort(404);
        }
        return $post;
    }
}
