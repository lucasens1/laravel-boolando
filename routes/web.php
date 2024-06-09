<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $products = config('products');
    return view('home', compact('products'));
})->name("Home");

Route::get('/men', function () {
    $products = config('products');
    return view('men', compact('products'));
})->name("Men");

Route::get('/women', function () {
    $products = config('products');
    return view('men', compact('products'));
})->name("Women");

Route::get('/kids', function () {
    $products = config('products');
    return view('men', compact('products'));
})->name("Kids");
