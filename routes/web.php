<?php

use App\Http\Controllers\CateogryContoller;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
    return view('index');
});

Route::get('category',[CateogryContoller::class,'index']);
// Route::get('result',[CateogryContoller::class,'result']);
