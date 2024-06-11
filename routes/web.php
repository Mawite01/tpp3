<?php

use App\Http\Controllers\category\CateogryContoller as CategoryIndexController;
use App\Http\Controllers\CateogryContoller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('index');
});

Route::get('test/{id}', function($id) {
    return 'Hello Test'. ''. $id;
});

Route::get('category',[CateogryContoller::class,'index'])->name('categoryIndex');

