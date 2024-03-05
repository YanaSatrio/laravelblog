<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yana Sat",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam consequuntur dolorem voluptate magnam pariatur facere laborum deserunt laboriosam. Commodi officiis vel vitae alias tempore quaerat at earum aperiam nostrum eaque aut officia, autem ab voluptas quam doloremque repellat corrupti. Rerum repellendus assumenda alias qui reiciendis consequuntur dolorum quos et minima voluptatibus, quaerat tempora architecto dolor est quam exercitationem consequatur sed iure ea vitae nesciunt nemo suscipit explicabo autem! Molestiae temporibus unde neque perferendis blanditiis nesciunt quae quas commodi illo numquam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Diki Min",
            "body" => ""
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
