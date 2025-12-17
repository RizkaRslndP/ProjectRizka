<?php

namespace App\Models;

use Illuminate\Support\Arr;



class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Rizka Rosalinda Pratiwi',
                'date' => '1 January 2025',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac vestibulum erat. Cras vulputate auctor lectus at consequat. Donec in libero euismod, cursus nunc at, fermentum massa.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Rizka Rosalinda Pratiwi',
                'date' => '1 January 2025',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae repudiandae, non voluptates placeat impedit sequi nam, quod sapiente voluptate, possimus inventore ratione eligendi! Maxime velit aperiam est earum, minus ducimus.'
            ]
        ];
    }

    public static function find($slug): array|null
    {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
