<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Hikmat Fadrial Ramadhan",
        "email" => "hikmatfadrial2000@gmail.com",
        "image" => "luffy.jpg"
    ]);
});

Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hikmat Fadrial Ramadhan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque minima iste necessitatibus accusamus, numquam incidunt est accusantium provident deleniti dolores illo suscipit obcaecati animi, esse, veritatis officiis porro perspiciatis nobis? Consequatur iure dolorem asperiores dolore illo eum, repudiandae a, cupiditate ducimus nobis iste itaque voluptatum, consequuntur ea et nam aspernatur libero cumque eligendi ab perferendis quas? Illum iusto necessitatibus incidunt non laboriosam dignissimos blanditiis quidem quod obcaecati libero. Laborum saepe similique tempore deleniti numquam doloribus corporis, dolores veritatis voluptas accusantium."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ilham",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quae debitis dolor iste, inventore accusantium repellendus, voluptatibus modi aliquam praesentium suscipit voluptates ducimus iusto id! Accusantium quam ab ratione voluptatibus at non mollitia sapiente iusto temporibus hic earum nobis quidem illo nam, iste vero dolor rerum perferendis totam, nihil facilis delectus fuga ducimus quos. Autem quaerat veritatis architecto unde laboriosam deserunt eligendi reprehenderit inventore. Deleniti, eligendi, totam mollitia quia debitis expedita quas ex voluptate quae iste illum ad sed nesciunt quam quasi quos. Odit magni est dolores placeat accusamus voluptatibus distinctio optio similique dignissimos molestiae, atque sint explicabo illum animi!"
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post

Route::get('posts/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hikmat Fadrial Ramadhan",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque minima iste necessitatibus accusamus, numquam incidunt est accusantium provident deleniti dolores illo suscipit obcaecati animi, esse, veritatis officiis porro perspiciatis nobis? Consequatur iure dolorem asperiores dolore illo eum, repudiandae a, cupiditate ducimus nobis iste itaque voluptatum, consequuntur ea et nam aspernatur libero cumque eligendi ab perferendis quas? Illum iusto necessitatibus incidunt non laboriosam dignissimos blanditiis quidem quod obcaecati libero. Laborum saepe similique tempore deleniti numquam doloribus corporis, dolores veritatis voluptas accusantium."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ilham",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam quae debitis dolor iste, inventore accusantium repellendus, voluptatibus modi aliquam praesentium suscipit voluptates ducimus iusto id! Accusantium quam ab ratione voluptatibus at non mollitia sapiente iusto temporibus hic earum nobis quidem illo nam, iste vero dolor rerum perferendis totam, nihil facilis delectus fuga ducimus quos. Autem quaerat veritatis architecto unde laboriosam deserunt eligendi reprehenderit inventore. Deleniti, eligendi, totam mollitia quia debitis expedita quas ex voluptate quae iste illum ad sed nesciunt quam quasi quos. Odit magni est dolores placeat accusamus voluptatibus distinctio optio similique dignissimos molestiae, atque sint explicabo illum animi!"
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
