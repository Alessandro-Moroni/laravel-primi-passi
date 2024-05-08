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

// homepage
Route::get('/', function () {

    $data = [
        'title'=> 'Laravel',
        'header'=> 'Header',
        'main'=> 'Main',
        'footer'=> 'Footer',

    ];

    return view('homepage', $data);

})->name('homepage');


// header
Route::get('/header', function () {

    $name = 'Header';
    $home = 'Home';
    return view('header', compact('name', 'home'));

})->name('header');

// main
Route::get('/main', function () {

    $name = 'Main';
    $home = 'Home';

    return view('main', compact('name', 'home'));

})->name('main');

// footer
Route::get('/footer', function () {

    $name = 'Footer';
    $home = 'Home';

    return view('footer', compact('name', 'home'));

})->name('footer');
