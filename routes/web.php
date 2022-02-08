<?php

use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
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
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "active" => 'about',
        "name" => "Gintama",
        "email" => "gintama@gg.com",
        "image" => "gintama.png"
    ]);
});


Route::get('/post', [PostController::class, 'index']);

//Halaman single

Route::get('/post/{post:slug}', [PostController::class, 'show']);

//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
//regis
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
//post regist
Route::post('/register', [RegisterController::class, 'store']);
//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

//Route::get('/categories/{category:slug}', function (Category $category) {
//   return view('post', [
//      'title' => "Post By Category : $category->name",
//     'active' => 'category',
//     'posts' => $category->post->load('category', 'author')
// ]);
//});

//Route::get('/authors/{author:username}', function (User $author) {
//    return view('post', [
//        'title' => "Post By Author : $author->name",
//        'active' => 'post',
//        'posts' => $author->post->load('category', 'author')
 //   ]);
//});
