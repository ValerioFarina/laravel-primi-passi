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
    $data = [
        'first_name' => 'Valerio',
        'last_name' => 'Farina'
    ];
    return view('home', $data);
});

Route::get('/chi-siamo', function () {
    $data = [
        'list' => [
            
        ]
    ];
    return view('about', $data);
})->name('about');
