<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\TagController;
use \App\Http\Controllers\Admin\CategoryController;
use \App\Http\Controllers\Admin\PostController;

use App\Http\Controllers\UserController;

use App\Http\Controllers\BlogController;


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

Route::get('/', [BlogController::class, 'index'])->name('blog');

Route::get('/article', [BlogController::class, 'post'])->name('post');

//создаем группу роутов для "админки"
Route::prefix('admin')->middleware(['admin'])->name('admin.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/tags', TagController::class);
    Route::resource('/posts', PostController::class);
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [UserController::class, 'create'])->name('register.create');
    Route::post('/register', [UserController::class, 'store'])->name('register.store');

    Route::get('/login', [UserController::class, 'auth'])->name('login.create');
    Route::post('/login', [UserController::class, 'storeAuth'])->name('login.store');
});


Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');
