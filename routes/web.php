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
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/ListeLivreur', function () {
    return view('ListeLivreur');
});
Route::get('/ListeAgent', function () {
    return view('ListeAgent');
});
Route::get('/liste-commande-declare', function () {
    return view('liste-commande-declare');
});
Route::get('/Listecommercant', function () {
    return view('Listecommercant');
});
Route::get('/Declarer-commande', function () {
    return view('Declarer-commande');
});

Route::get('/listedec', function () {
    return view('listedec');
});



Route::get('/notification', function () {
    return view('notification');
});

Route::get('test', function () {
    event(new App\Events\MyEvenet('welcome'));
    return "Event has been sent!";
});
use App\Http\Controllers\declarerController;
route::get('Declarer-commande', [declarerController::class,'addDeclarer'])->name('declarer.add');
route::post('Declarer-commande', [declarerController::class,'saveDeclarer'])->name('save.post');
route::get('liste-commande-declare', [declarerController::class,'declarerList'])->name('declarer.List');


Route::get('/index', function () {
    return view('index');
});

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