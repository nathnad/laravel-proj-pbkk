<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name'=>'Nadia Nathania', 'title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title'=>'Blog', 'posts'=>[
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
    ]]);
});

Route::get('/posts/{slug}', function($slug) {
    # wildcard
    $posts = [
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
    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    # dd($post);
    return view('post', ['title'=>'Single Post', 'post'=>$post]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contact']);
});
