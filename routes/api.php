<?php

use App\Http\Controllers\Api\Category\CateogryContoller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('categoryList', [CateogryContoller::class, 'index']);
Route::post('categoryStore', [CateogryContoller::class, 'store']);
Route::get('categoryShow/{id}',[CateogryContoller::class, 'show']);
Route::post('categoryUpdate/{id}', [CateogryContoller::class, 'update']);
Route::delete('categoryUpdate/{id}', [CateogryContoller::class, 'delete']);

// Route::group(['middleware' => 'auth:sactum'], function(){

// });



