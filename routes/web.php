<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\category\CateogryContoller as CategoryIndexController;
use App\Http\Controllers\CateogryContoller;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('index');
});

Route::get('test/{id}', function($id) {
    return 'Hello Test'. ''. $id;
});

Route::get('category',[CateogryContoller::class,'index'])->name('categoryIndex');
Route::get('category/create',[CateogryContoller::class, 'create'])->name('categoryCreate');
Route::post('category/store' , [CateogryContoller::class, 'store'])->name('categoryStore');
Route::get('category/{data}',[CateogryContoller::class, 'edit'])->name('categoryEdit');
Route::post('category/update/{data}',[CateogryContoller::class, 'update'])->name('categoryUpdate');
Route::post('category/delete/{data}',[CateogryContoller::class, 'delete'])->name('categoryDelete');

Route::resource('articles', ArticleController::class);