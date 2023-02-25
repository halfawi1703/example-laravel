<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostControllers;


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
        'title' => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Kirana Almahira',
        'email' => 'halfawi1703@gmail.com',
        'image' => 'img/kirana.jpeg'
    ]);
});

Route::get('/blog', [PostControllers::class, 'index']);

Route::get('blog/{post:slug}', [PostControllers::class, 'detail']);

