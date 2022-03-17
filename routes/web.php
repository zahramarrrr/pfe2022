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
Route::get('/index', function () {
    return view('index');
});
Route::get('/Login', function () {
    return view('Login');
});
Route::get('/Admin', function () {
    return view('Admin');
});
Route::get('/commercants', function () {
    return view('Listecommercant');
});
Route::get('/Commerçant', function () {
    return view('Commerçant');
});
Route::get('/liste-commande-declare', function () {
    return view('liste-commande-declare');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__.'/auth.php';
