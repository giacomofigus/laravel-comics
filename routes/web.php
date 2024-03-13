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
    $comics = config('comics'); // Corrected line
    return view('pages.welcome', compact('comics'));
});

Route::get('/home', function () {
    $comics = config('comics'); // Corrected line
    return view('pages.welcome', compact('comics'));
});


Route::get('/contacts', function () {
    return view('pages.contacts');
});
