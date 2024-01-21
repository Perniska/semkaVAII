<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UzivatelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InterpretController;



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

Route::get('/uzivatelia/index{uzivatel}',[UzivatelController::class,'index'])->name('uzivatel.index');

Route::get('/uzivatelia/create',[UzivatelController::class,'create'])->name('uzivatel.create');

Route::post('/uzivatelia',[UzivatelController::class,'store'])->name('uzivatel.store');
Route::get('/uzivatelia/edit{uzivatel}', [UzivatelController::class, 'edit'])->name('uzivatel.edit');
Route::put('/uzivatelia/update{uzivatel}', [UzivatelController::class, 'update'])->name('uzivatel.update');
Route::delete('/uzivatelia/destroy{uzivatel}', [UzivatelController::class, 'destroy'])->name('uzivatel.destroy');
Route::get('/forum', [CommentController::class, 'commenty'])->name('forum');
Route::get('/uzivatelia', [UzivatelController::class, 'prihlasenie'])->name('uzivatel.prihlasenie');
Route::get('/login',[UzivatelController::class ,'login']);
Route::get('/logout',[UzivatelController::class ,'logout']);
Route::get('/registration',[UzivatelController::class ,'registration']);
Route::post('/register-user',[UzivatelController::class ,'registerUser'])->name('register-user');;
Route::post('/login-user',[UzivatelController::class ,'loginUser'])->name('login-user');
Route::get('dashboard',[UzivatelController::class ,'dashboard']);
Route::post('/pridat_comment', [CommentController::class, 'pridat_comment'])->name('pridat_comment');
Route::post('/add_reply', [CommentController::class, 'add_reply'])->name('add_reply');

Route::get('/novinky', [InterpretController::class, 'novinky'])->name('novinky');
Route::get('/interpret/{interpret}/piesne', [InterpretController::class, 'zoznamPiesni'])->name('interpret.piesne');
Route::get('/interpret/{interpret}/piesen/{song}', [InterpretController::class, 'zobrazPiesen'])->name('interpret.piesen');
Route::get('/interpret/{interpret}/piesen/{song}/export', [InterpretController::class, 'exportSong'])->name('interpret.export');
Route::post('/edit-comment', [CommentController::class, 'editComment'])->name('edit_comment');
Route::post('/delete_comment', [CommentController::class,'deleteComment'])->name('delete_comment');
