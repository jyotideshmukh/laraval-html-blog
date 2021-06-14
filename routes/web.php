<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Blog;
use App\Models\Category;
use App\Models\User;

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

Route::get('/posts', function () {
    return view('welcome',[
        'posts'=>Post::findAll(),
        'type'=>'Post'
    ]);
});
Route::get('/post/{post}',function ($slug) {
    return view('post',[
        'post'=>Post::findOrFail($slug)
        ]
    );
});

Route::get('/blogs', function () {
    return view('welcome',[
        'posts'=>Blog::with('user','category')->get(),
        'type'=>'Blog'
    ]);
});

Route::get('/blog/{blog:slug}',function (Blog $blog) {
    return view('post',[
            'post'=>$blog
        ]
    );
});

Route::get('/category/{category:slug}',function (Category $category) {
    return view('welcome',[
            'posts'=>$category->blogs,
            'type'=>'Blog'
        ]
    );
});

Route::get('/user/{user:email}',function (User $user) {
    return view('welcome',[
            'posts'=>$user->blogs,//->load(['category','user']),
            'type'=>'Blog'
        ]
    );
});
