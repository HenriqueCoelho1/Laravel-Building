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
    return view('welcome');
});

Route::get('/admin/about', function () {
    echo "Hello this is about page in the /admin/about page";
});

Route::get('/user/{id}', function ($id) {
    return "This is user number " . $id;
});

Route::get('/admin/posts/example', array('as' => 'admin.home' ,function () {
    $url = route('admin.home');
    return "this is a url " . $url;
}));