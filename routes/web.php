<?php

use App\Post;

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
    $posts = Post::with('author')->get();

    return view('post.list', compact('posts'));
})->name('posts.list');

Route::get('/posts/{id}', function ($id) {
    $post = Post::with('author')->find($id);
    if($post == null) { 
        abort(404); 
    }
    
    return view('post.show', compact('post'));
})->name('posts.show');