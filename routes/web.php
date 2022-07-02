<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ManagePostController;

//Frontend
Route::get('/', function () {
    return view('frontend.index');
});
Auth::routes();
Route::resource('blog', PostController::class);

//Backend
Route::middleware(['is_admin'])->prefix('admin')->group(function () {


    Route::get('/', [ManagePostController::class,'index']);
    Route::get('/post/update_status/{id}', [ManagePostController::class,'update_status']);
    Route::get('/post/delete/{id}', [ManagePostController::class,'delete']);

});

