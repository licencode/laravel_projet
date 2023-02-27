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
    return view('accueil');
});

Route::get('/qui_sommes_nous', function () {
    return view('qui_sommes_nous');
});
Route::get('/liste_des_formation', function () {
    return view('liste_des_formation');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/connexion', function () {
    return view('connexion');
});

Route::get('/creation_compte', function () {
    return view('creation_compte');
});
