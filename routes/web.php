<?php

use App\Http\Controllers\NewsController as NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\{HomeController, CategoryController, LkController};

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [LkController::class, 'login']);

//news routes
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('id', '\d+')
    ->name('news.show');

//categories routes
Route::get('/categories', [CategoryController::class, 'index'])
    ->name('categories.index');
Route::get('/categories/{id}', [CategoryController::class, 'show'])
    ->where('id', '\d+')
    ->name('categories.show');

//admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::view('/', 'admin.index')->name('index');
    Route::resource('categories', AdminCategoryController::class);
    Route::resource('news', AdminNewsController::class);
});
