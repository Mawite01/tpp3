<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\category\CateogryContoller as CategoryIndexController;
use App\Http\Controllers\CateogryContoller;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

// Route::get('/index', function() {
//     return view('index');
// });

Route::get('/list', function() {
    return view('list');
})->name('list');

Route::get('category',[CateogryContoller::class,'index'])->name('categoryIndex');
Route::get('category/create',[CateogryContoller::class, 'create'])->name('categoryCreate');
Route::post('category/store' , [CateogryContoller::class, 'store'])->name('categoryStore');
Route::get('category/{data}',[CateogryContoller::class, 'edit'])->name('categoryEdit');
Route::post('category/update/{data}',[CateogryContoller::class, 'update'])->name('categoryUpdate');
Route::post('category/delete/{data}',[CateogryContoller::class, 'delete'])->name('categoryDelete');

Route::resource('articles', ArticleController::class);
Route::resource('products', ProductController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

