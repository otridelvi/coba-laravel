<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/posts', [PostController::class,'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'showSingleData']);
Route::get('/categories/{category:slug}',[CategoryController::class,'index']);
Route::get('/authors/{author:username}',[UserController::class,'index']);
Route::get('/categories',[CategoryController::class,'listCategories']);