<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PostsController;



// Route::resource('posts', 'App\Http\Controllers\PostsController');

Route::get('/contact', [PostsController::class, 'contact']);

Route::get('/post/{id}/{firstname}/{secondname}', [PostsController::class, 'show_post']);

// Route::get('/insert', function(){

//     DB::insert("INSERT INTO posts(title, content) value(?, ?)", ['PHP insert data LARAVEL', 'Laravel text right here -->'] );

// });

Route::get('/read', function(){

    $results = DB::select("SELECT * FROM posts WHERE id = ?", [1]);

    foreach($results as $post){
        return $post->title;
    }

});


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