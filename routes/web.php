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

Route::get('/', function () {
    $firstHello = [
        'title' => 'hello world!',
        'class' => '72'
    ];
    return view('home', $firstHello);
})->name('home');

Route::get('/about', function () {
    $aboutTitle = [
        'title' => 'hello about!',
        'class' => '72'
    ];
    return view('about', $aboutTitle);
})->name('about');
