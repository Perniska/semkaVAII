<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UzivatelController;

Route::get('/', function () {
    return view('domov');
})->name('domov');

Route::get('/novinky', function () {
    return view('novinky');
})->name('novinky');

Route::get('/forum', function () {
    return view('forum');
})->name('forum');

Route::get('/akordy', function () {
    return view('akordy');
})->name('akordy');

Route::get('/profil', function () {
    return view('profil_stranka');
})->name('profil');

Route::get('/uzivatelia/index{uzivatel}',[\App\Http\Controllers\UzivatelController::class,'index'])->name('uzivatel.index');

Route::get('/uzivatelia/create',[\App\Http\Controllers\UzivatelController::class,'create'])->name('uzivatel.create');

Route::post('/uzivatelia',[\App\Http\Controllers\UzivatelController::class,'store'])->name('uzivatel.store');
Route::get('/uzivatelia/edit{uzivatel}', [UzivatelController::class, 'edit'])->name('uzivatel.edit');
Route::put('/uzivatelia/update{uzivatel}', [UzivatelController::class, 'update'])->name('uzivatel.update');
Route::delete('/uzivatelia/destroy{uzivatel}', [UzivatelController::class, 'destroy'])->name('uzivatel.destroy');
Route::post('/comments', [\App\Http\Controllers\CommentController::class, 'store'])->name('comments.store');

Route::get('/uzivatelia', [UzivatelController::class, 'prihlasenie'])->name('uzivatel.prihlasenie');
Route::get('/login',[UzivatelController::class ,'login']);
Route::get('/logout',[UzivatelController::class ,'logout']);
Route::get('/registration',[UzivatelController::class ,'registration']);
Route::post('/register-user',[UzivatelController::class ,'registerUser'])->name('register-user');;
Route::post('/login-user',[UzivatelController::class ,'loginUser'])->name('login-user');
Route::get('dashboard',[UzivatelController::class ,'dashboard']);
