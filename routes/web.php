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
    $books = ['La morte di Ivan Il\'Ic', 'Il mastino dei Baskerville', 'Il maialino di Natale', 'Total Recall'];
    return view('home', compact('books'));
});