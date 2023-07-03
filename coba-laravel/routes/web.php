<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|       
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $blog_home = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Andy Nugraha Putra",
            "slug" => "judul-home-pertama",
            "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-home-pertama",
            "author" => "Andy Nugraha Putra",
            "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
    ];
    return view('home',[
        "title" => "Home",
        "home" => $blog_home
    ]);
});

Route::get('/about', function () {
    $blog_about = [
        [
            "title" => "Judul post Pertama",
            "author" => "Andy Nugraha Putra",
            "slugg" => "judul-about-pertama",
            "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
        [
            "title" => "Judul post Kedua",
            "slugg" => "judul-about-kedua",
            "author" => "Andy Nugraha Putra",
            "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
    ];
    return view('about', [
        "title" => "About",
        "about" => $blog_about
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "author" => "Andy Nugraha Putra",
        "slug" => "judul-post-pertama",
         "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
    ],
    [
        "title" => "Judul Post Kedua",
        "author" => "Andy Nugraha Putra",
        "slug" => "judul-post-kedua",
        "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
    ],
];
    
    return view('blog', [
        "title" => "Blog",
        "blog" => $blog_posts
    ]);
});


// halaman single post
Route::get('blog/{slug}', function($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Andy Nugraha Putra",
            "slug" => "judul-post-pertama",
             "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Andy Nugraha Putra",
            "slug" => "judul-post-kedua",
            "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
    ];

    $new_post = [];
foreach ($blog_posts as $post){
    if($post["slug"] === $slug) {
        $new_post = $post;
    }
}

    return view ('blogs',[
        "title" => "Single Posts",
        "post" => $new_post
    ]);
});

Route::get('about/{slugg}', function($slugg) {
    $blog_about = [
        [
            "title" => "Judul Post Pertama",
            "author" => "Andy Nugraha Putra",
            "slugg" => "judul-about-pertama",
             "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
        [
            "title" => "Judul Post Kedua",
            "author" => "Andy Nugraha Putra",
            "slugg" => "judul-about-kedua",
            "body" => "fkkjewbifobiewhfbuihqfuiqhiuhqiudhopqwhdnjnsjkfnkjzsdfsdfsdfwerfsdfeefsfdfesfdsfjnf"
        ],
    ];

    $new_about = [];
foreach ($blog_about as $about){
    if($about["slugg"] === $slugg) {
        $new_about = $about;
    }
}

    return view ('aboutes',[
        "title" => "Single Posts",
        "anjay" => $new_about
    ]);
});

Route::get('home/{slug}', function($slug) {
    return view ('homes',[
        "title" => "Single about"
    ]);
});