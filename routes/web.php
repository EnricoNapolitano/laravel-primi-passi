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
    $links = ['link_1', 'link_2', 'link_3', 'link_4'];
    $books = ['La morte di Ivan Il\'Ic', 'Il mastino dei Baskerville', 'Il maialino di Natale', 'Total Recall'];
    return view('home', compact('books', 'links'));
})->name('home');

Route::get('/link/{index}', function ($index) {
    $links = ['link_1', 'link_2', 'link_3', 'link_4'];
    $link = $links[$index];
    return view('link', compact('link') );
})->name('link');