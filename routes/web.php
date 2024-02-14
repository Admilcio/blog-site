<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

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
    $posts = [];

    if (auth()->check()) {
        $posts = auth()->user()->posts()->latest()->paginate(3);
        return view('home', ['posts' => $posts]);
    } else {
        return view('/loginUser', ['posts' => $posts]);
    }
});

Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/home', [UserController::class, 'index'])->name('home');
Route::get('/loginUser', [UserController::class, 'loginUser'])->name('loginUser');


// Blog post related routes

Route::post('/create-post', [PostController::class, 'create']);
Route::get('/edit-post/{post}', [PostController::class, 'showEditScreen']);
Route::put('/edit-post/{post}', [PostController::class, 'updatePost']);
Route::delete('/delete-post/{post}', [PostController::class, 'deletePost']);

/* Page controller Route */


Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/user-posts', [PageController::class, 'userPosts'])->name('user-posts');
