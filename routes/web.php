<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BordController; 
use App\Http\Controllers\MainController; 
use App\Http\Controllers\CommandeController;



Route::get('/',                     [MainController::class, 'accueil'])->name('accueil');
Route::get('passer-commande',       [MainController::class, 'smaker'])->name('smaker');



Route::prefix('cuisine')->group(function () {
    
    require __DIR__.'/auth.php';

    Route::get('/dashboard',                         [BordController::class, 'accueil'])->name('dashboard');
    Route::resource('/commande',                     CommandeController::class);
    Route::resource('/menu',                         MenuController::class);
    Route::get('/nouvelle-commande',                 [BordController::class, 'commande'])->name('commandez');
            
        
});