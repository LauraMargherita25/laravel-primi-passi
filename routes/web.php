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
    $parametri = [
        'nav' =>  [
            [
                'text' => 'About',
                'link' => 'about' 
            ],
            [
                'text' => 'Contacts',
                'link' => 'contacts' 
            ],
            [
                'text' => 'Our products',
                'link' => 'products' 
            ],
        ]
    ];
    return view('home', $parametri);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/products', function () {
    return view('products');
})->name('products');