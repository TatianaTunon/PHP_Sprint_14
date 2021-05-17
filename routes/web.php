<?php

use Illuminate\Http\Request;
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
//Route::resource('/shops', shopController::class);

//Show
Route::get('/shops/{id}/pictures', [shopController::class, 'show'])->name('shops.show');
  

//CRUD quadres
//Route::resource('/quadres', quadreController::class);