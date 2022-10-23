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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('indexSesudah');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/note', function () {
    return view('note');
});

Route::get('/addNote', function () {
    return view('addNote');
});