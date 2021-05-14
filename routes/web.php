<?php

use App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\CategoryController;
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

//создаем группу роутов для "админки"
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('index');
    Route::resource('/categories', CategoryController::class);
});
