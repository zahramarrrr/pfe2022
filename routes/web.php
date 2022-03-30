<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\declarerController;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/page-contact', function () {
    return view('page-contact');
});
Route::get('/profil-commerçant', function () {
    return view('profil-commerçant');
});
Route::get('/profil-admin', function () {
    return view('profil-admin');
});
Route::get('/Declarer-commande', function () {
    return view('Declarer-commande');
});

route::get('Declarer-commande', [declarerController::class,'addDeclarer'])->name('declarer.add');
route::post('Declarer-commande', [declarerController::class,'saveDeclarer'])->name('save.post');
route::get('liste-commande-declare', [declarerController::class,'declarerList'])->name('declarer.List');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



/*Route::middleware(['auth','role:admin'])->group(function(){
    Route::get('/private',function(){
        return 'bonjour';
    });
});*/


require __DIR__.'/auth.php';
Route::get('redirects','App\Http\Controllers\HomeController@index');