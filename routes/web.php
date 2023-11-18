<?php


use App\Models\Category;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TulisResepController;
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
})->middleware('auth');

Route::get('/dashboard/posts/create', function () {
    return view('/dashboard/posts/create', [
        "title" => "Tulis Resepmu",
    ]);
})->middleware('auth');

Route::get('/posts', [PostController::class, 'index'])->middleware('auth');

// ini adalah halaman single post nya
Route::get('posts/{post:slug}', [PostController::class, 'show'])->middleware('auth');


Route::get('categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
})->middleware('auth');



Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post by Category : $category->name",
        'posts' => $category->posts->load('category', 'author')
    ]);
});
Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        'posts' => $author->posts->load('category', 'author')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/blog/checkSlug', [TulisResepController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', TulisResepController::class)->middleware('auth');

