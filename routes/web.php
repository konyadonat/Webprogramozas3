<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers;

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

Route::get('/', [Controllers\HomeController::class,'index']) -> name('home');


Route::middleware(['auth'])->group(function () {
    Route::get('/addNewPlace', [Controllers\PlaceController::class,'create'])->name('place.create');
    Route::post('/addNewPlace', [Controllers\PlaceController::class,'store']);

    Route::get('/addNewGrape', [Controllers\GrapeController::class,'create'])->name('grape.create');
    Route::post('/addNewGrape', [Controllers\GrapeController::class,'store']);

    Route::get('/addNewWineType', [Controllers\WineTypeController::class,'create'])->name('winetype.create');
    Route::post('/addNewWineType', [Controllers\WineTypeController::class,'store']);

    Route::get('/addNewWine', [Controllers\WineController::class,'create'])->name('wine.create');
    Route::post('/addNewWine', [Controllers\WineController::class,'store']);
});

Route::get('/place/{place}', [Controllers\PlaceController::class,'show'])->name('place.details');


Route::get('/grape/{grape}', [Controllers\GrapeController::class,'show'])->name('grape.details');


Route::get('/winetype/{winetype}', [Controllers\WineTypeController::class,'show'])->name('winetype.details');


Route::get('/wine/{wine}', [Controllers\WineController::class,'show'])->name('wine.details');

require __DIR__.'/auth.php';