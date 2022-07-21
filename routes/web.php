<?php

use Illuminate\Support\Facades\Route;

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

Route::get('example', function() {
    return view('laravel_index'); 
});

// Dashboard
Route::get('admin', function() {
    return view('admin.dashboard');
});

// Datatable
Route::get('table', function() {
    return view('admin.datatable'); 
});