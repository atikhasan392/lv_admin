<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'admin.index')->name('admin.index');
Route::view('/admin/products', 'admin.products')->name('admin.products');
