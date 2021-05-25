<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PassportController;
use App\Http\Controllers\shopController;
use App\Http\Controllers\quadreController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::get('register', [PassportController::class, 'register'])->name('register');
Route::post('register', [PassportController::class, 'register']);
Route::get('login', [PassportController::class, 'login'])->name('login');
Route::post('login', [PassportController::class, 'login']);*/
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
                ->middleware('guest')
                ->name('login');
                
Route::post('login', [AuthenticatedSessionController::class, 'store'])
                ->middleware('guest');

Route::middleware('auth:api')->group(function() {
    //Route::resource('shops', shopController::class);
    //Route::resource('quadres', quadreController::class);
    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


