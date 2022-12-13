<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::any('/login', [AuthController::class, 'login'])->name("login")->middleware(["noAuth"]);
Route::any('/logout', [AuthController::class, 'logout'])->name("logout")->middleware(["withAuth"]);

Route::middleware(["withAuth"])->prefix('product')->group(function() {
    Route::get('/list', [ProductController::class, 'index'])->name('product.list');
    Route::get('/store', [ProductController::class, 'store'])->name('product.store');
    Route::post('/create', [ProductController::class, 'create'])->name('product.create');
    Route::get('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::put('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
    Route::get('/destroy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});

Route::middleware(["withAuth"])->prefix('blog')->group(function(){
    Route::get('/list', [BlogController::class, 'index'])->name('blog.list');
    Route::get('/store', [BlogController::class, 'store'])->name('blog.store');
    Route::post('/create', [BlogController::class, 'create'])->name('blog.create');
    Route::get('/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::put('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::get('/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
});

Route::prefix('product')->group(function(){
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
});

Route::prefix('blog')->group(function(){
    Route::get('/readmore/{id}', [BlogController::class, 'readmore'])->name('blog.readmore');
});


