<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UtilisateurController;

//          'URL',[NomDuController::class,'fonction dans ce controller']
Route::get('/',function()
 { 
    return view('index'); 
});

Route::get('/user',[UtilisateurController::class,'showUtilisateur']);
Route::post('/validation',[UtilisateurController::class,'store']) -> name('validation.store');
Route::get('/update/{id}',[UtilisateurController::class,'showPage']) -> name('update.page');
Route::put('/valid/{idd}',[UtilisateurController::class,'updateUser']) -> name('update.update');





