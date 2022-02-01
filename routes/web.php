<?php

use App\Http\Controllers\NewsController as NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\{HomeController, CategoryController, ContactsController, LkController};

Route::get('/', [HomeController::class, 'index']);
Route::resource('contacts', ContactsController::class);
Route::get('/login', [LkController::class, 'login']);

//news routes
Route::get('/news', [NewsController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->where('news', '\d+')
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

Route::get('/collection', function(){
    $array = ['Anna', 'Viktor', 'Alexey', 'dima', 'Ira', 'VaSya', 'olya'];
    $collection = collect($array);
    dd($collection->map(function($item){
        return mb_strtoupper($item);
    })->sort());
});
