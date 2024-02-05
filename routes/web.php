<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UzivatelController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\InterpretController;


//základné routy
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


//prihlásenie a odhlásenie užívateľa
Route::get('/login',[UzivatelController::class ,'login']);
Route::get('/logout',[UzivatelController::class ,'logout']);
Route::post('/login-user',[UzivatelController::class ,'loginUser'])->name('login-user');
//registrácia užívateľa
Route::get('/registration',[UzivatelController::class ,'registration']);
Route::post('/register-user',[UzivatelController::class ,'registerUser'])->name('register-user');;
//update a delete pre užívateľa
Route::put('/uzivatelia/update{uzivatel}', [UzivatelController::class, 'update'])->name('uzivatel.update');
Route::delete('/uzivatelia/destroy{uzivatel}', [UzivatelController::class, 'destroy'])->name('uzivatel.destroy');
//správa komentárov
Route::get('/forum', [CommentController::class, 'commenty'])->name('forum');
Route::post('/pridat_comment', [CommentController::class, 'pridat_comment'])->name('pridat_comment');
Route::post('/add_reply', [CommentController::class, 'add_reply'])->name('add_reply');
Route::post('/edit-comment', [CommentController::class, 'editComment'])->name('edit_comment');
Route::post('/delete_comment', [CommentController::class,'deleteComment'])->name('delete_comment');
//správa piesní a interpretov
Route::get('/novinky', [InterpretController::class, 'novinky'])->name('novinky');
Route::get('/interpret/{interpret}/piesne', [InterpretController::class, 'zoznamPiesni'])->name('interpret.piesne');
Route::get('/interpret/{interpret}/piesen/{song}', [InterpretController::class, 'zobrazPiesen'])->name('interpret.piesen');
Route::get('/interpret/{interpret}/piesen/{song}/export', [InterpretController::class, 'exportSong'])->name('interpret.export');
