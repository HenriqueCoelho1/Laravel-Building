<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;



Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/contact', [PostsController::class, 'contact']);


// Route::get('/posts', [PostsController::class, 'index']);

// Route::get('/posts/{id}', [PostsController::class, 'withId']);

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/admin/about', function () {
//     echo "Hello this is about page in the /admin/about page";
// });

// Route::get('/user/{id}', function ($id) {
//     return "This is user number " . $id;
// });

// Route::get('/admin/posts/example', array('as' => 'admin.home' ,function () {
//     $url = route('admin.home');
//     return "this is a url " . $url;
// }));