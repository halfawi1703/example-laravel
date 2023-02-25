<?php

namespace App\Models;

class Post
{
    private static $blog_post = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Silvia Yulianti',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste accusamus modi sunt laudantium dolor consectetur velit suscipit autem optio dolorem provident, vel dolore ex nostrum cupiditate. Modi debitis mollitia illo totam harum, eum laboriosam quidem praesentium porro placeat reiciendis molestias earum voluptatibus optio. Iusto consequuntur placeat minus, assumenda deserunt, amet tenetur quibusdam eligendi similique delectus veniam eum pariatur rerum porro esse in! Aspernatur laborum dicta sapiente nihil pariatur odio molestias, in consequatur sequi magnam veniam commodi repellat minima animi fugit?'
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Halfawi',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste accusamus modi sunt laudantium dolor consectetur velit suscipit autem optio dolorem provident, vel dolore ex nostrum cupiditate. Modi debitis mollitia illo totam harum, eum laboriosam quidem praesentium porro placeat reiciendis molestias earum voluptatibus optio. Iusto consequuntur placeat minus, assumenda deserunt, amet tenetur quibusdam eligendi similique delectus veniam eum pariatur rerum porro esse in! Aspernatur laborum dicta sapiente nihil pariatur odio molestias, in consequatur sequi magnam veniam commodi repellat minima animi fugit?'
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
