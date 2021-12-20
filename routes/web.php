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
// rotta per l'homepage
Route::get('/', function () {

    $cards = config('comics_db.cards');
    return view('homepage',compact('cards'));
});

// rotta per i comics

Route::get('comicsPage', function () {

    $cards = config('comics_db.cards');
    return view('comicsPage',compact('cards'));
});

// rotta dei personaggi
Route::get('characters', function () {

    $characters = config('characters.characters');
    return view('characters',compact('characters'));
});


// rotta dinamica per il singolo fumetto 
Route::get('comicsPage/{id}', function ($id) {
    $comics = config('comics_db.cards');

    if (is_numeric($id) && $id >= 0 && $id < count($comics)) {
        $comic = $comics[$id];
        return view('show', compact('comic'));
    } else {
        abort(404);
    }
})->name('comic');