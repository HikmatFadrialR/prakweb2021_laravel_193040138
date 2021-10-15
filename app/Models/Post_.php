<?php

namespace App\Models;


class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hikmat Fadrial Ramadhan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque minima iste necessitatibus accusamus, numquam incidunt est accusantium provident deleniti dolores illo suscipit obcaecati animi, esse, veritatis officiis porro perspiciatis nobis? Consequatur iure dolorem asperiores dolore illo eum, repudiandae a, cupiditate ducimus nobis iste itaque voluptatum, consequuntur ea et nam aspernatur libero cumque eligendi ab perferendis quas? Illum iusto necessitatibus incidunt non laboriosam dignissimos blanditiis quidem quod obcaecati libero. Laborum saepe similique tempore deleniti numquam doloribus corporis, dolores veritatis voluptas accusantium."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ilham",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quae debitis dolor iste, inventore accusantium repellendus, voluptatibus modi aliquam praesentium suscipit voluptates ducimus iusto id! Accusantium quam ab ratione voluptatibus at non mollitia sapiente iusto temporibus hic earum nobis quidem illo nam, iste vero dolor rerum perferendis totam, nihil facilis delectus fuga ducimus quos. Autem quaerat veritatis architecto unde laboriosam deserunt eligendi reprehenderit inventore. Deleniti, eligendi, totam mollitia quia debitis expedita quas ex voluptate quae iste illum ad sed nesciunt quam quasi quos. Odit magni est dolores placeat accusamus voluptatibus distinctio optio similique dignissimos molestiae, atque sint explicabo illum animi!"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
