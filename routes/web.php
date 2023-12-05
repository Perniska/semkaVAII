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

Route::get('/uzivatelia/index{uzivatel}',[\App\Http\Controllers\UzivatelController::class,'index'])->name('uzivatel.index');

Route::get('/uzivatelia/create',[\App\Http\Controllers\UzivatelController::class,'create'])->name('uzivatel.create');

Route::post('/uzivatelia',[\App\Http\Controllers\UzivatelController::class,'store'])->name('uzivatel.store');
Route::get('/uzivatelia/edit{uzivatel}', [UzivatelController::class, 'edit'])->name('uzivatel.edit');
Route::put('/uzivatelia/update{uzivatel}', [UzivatelController::class, 'update'])->name('uzivatel.update');
Route::delete('/uzivatelia/destroy{uzivatel}', [UzivatelController::class, 'destroy'])->name('uzivatel.destroy');
