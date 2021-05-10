<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\shopController;
use App\Http\Controllers\quadreController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

//CRUD shops
Route::resource('/shops', shopController::class)->middleware(['auth']);

//Show
Route::get('/shops/{id}/pictures', [shopController::class, 'show'])->name('shops.show');
   
/* 
   //Index
    Route::get('/shops', [shopController::class, 'index'])->name('shops.index');

    //Create
    Route::get('/shops/create', [shopController::class, 'create'])->name('shops.create');
    Route::post('/shops', [shopController::class, 'store'])->name('shops.store');
 
    //Edit
    Route::get('/shops/{shops}/edit', [shopController::class, 'edit'])->name('shops.edit');
    Route::put('/shops/{shops}', [shopController::class, 'update'])->name('shops.update');
 
    //Borrar
    Route::delete('/shops/{shops}', [shopController::class, 'destroy'])->name('shops.destroy');
*/

//CRUD quadres
Route::resource('/quadres', quadreController::class)->middleware(['auth']);
   
   /* 
   //Index
    Route::get('/quadres', [quadreController::class, 'index'])->name('quadres.index');

    //Create
    Route::get('/quadres/create', [quadreController::class, 'create'])->name('quadres.create');
    Route::post('/quadres', [quadreController::class, 'store'])->name('quadres.store');
    
    //Edit
    Route::get('/quadres/{quadres}/edit', [quadreController::class, 'edit'])->name('quadres.edit');
    Route::put('/quadres/{quadres}', [quadreController::class, 'update'])->name('quadres.update');
 
    //Borrar
    Route::delete('/quadres/{quadres}', [quadreController::class, 'destroy'])->name('quadres.destroy');
    */