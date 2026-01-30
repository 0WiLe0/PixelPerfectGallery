<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\FriendController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\LikeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
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


Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts/{post}/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/', function () {return view('index');})->name('index');

Route::get('/login', function () {return view('log');});

Route::get('/register', function () {return view('register');});

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::get('/profile/{user_id}', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::patch('/edit', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/main', function () {return view('main');})->name('main');

Route::get('/feed', [FeedController::class, 'create'])->name('feed');

Route::get('/like/{id}', [LikeController::class, 'store'])->name('like.store');

Route::get('/message', function () {return view('message');});

Route::get('/friends', function () {return view('friends');});

Route::get('/settings', function () {return view('settings');});

Route::post('/image', [ImageController::class, 'store']); 

Route::post('/friend/{user_id}', [FriendController::class, 'store'])->name('friend.store'); 
Route::delete('/friend/{friend_id}', [FriendController::class, 'destroy'])->name('friend.destroy'); 
Route::patch('/friend/{friend_id} ', [FriendController::class, 'update'])->name('friend.update'); 

Route::post('/subscribe/{user_id}', [SubscribeController::class, 'store'])->name('subscribe.store'); 
Route::delete('/subscribe/{friend_id}', [SubscribeController::class, 'destroy'])->name('subscribe.destroy'); 
