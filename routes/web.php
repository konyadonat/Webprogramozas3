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
    Route::get('/place/{place}/edit', [Controllers\PlaceController::class,'edit'])->name('place.edit');
    Route::post('/place/{place}/edit', [Controllers\PlaceController::class,'update']);

    Route::get('/addNewGrape', [Controllers\GrapeController::class,'create'])->name('grape.create');
    Route::post('/addNewGrape', [Controllers\GrapeController::class,'store']);
    Route::get('/grape/{grape}/edit', [Controllers\GrapeController::class,'edit'])->name('grape.edit');
    Route::post('/grape/{grape}/edit', [Controllers\GrapeController::class,'update']);
    

    Route::get('/addNewWineType', [Controllers\WineTypeController::class,'create'])->name('winetype.create');
    Route::post('/addNewWineType', [Controllers\WineTypeController::class,'store']);
    Route::get('/winetype/{winetype}/edit', [Controllers\WineTypeController::class,'edit'])->name('winetype.edit');
    Route::post('/winetype/{winetype}/edit', [Controllers\WineTypeController::class,'update']);

    Route::get('/addNewWine', [Controllers\WineController::class,'create'])->name('wine.create');
    Route::post('/addNewWine', [Controllers\WineController::class,'store']);
    Route::get('/wine/{wine}/edit', [Controllers\WineController::class,'edit'])->name('wine.edit');
    Route::post('/wine/{wine}/edit', [Controllers\WineController::class,'update']);

    Route::post('/wine/{wine}/destroy', [Controllers\WineController::class,'destroy'])->name('wine.destroy');
});

Route::get('/places', [Controllers\PlaceController::class,'index'])->name('place.index');
Route::get('/place/{place}', [Controllers\PlaceController::class,'show'])->name('place.details');

Route::get('/grape/{grape}', [Controllers\GrapeController::class,'show'])->name('grape.details');
Route::get('/grapes', [Controllers\GrapeController::class,'index'])->name('grape.index');

Route::get('/winetype/{winetype}', [Controllers\WineTypeController::class,'show'])->name('winetype.details');
Route::get('/winetypes', [Controllers\WineTypeController::class,'index'])->name('winetype.index');

Route::get('/wine/{wine}', [Controllers\WineController::class,'show'])->name('wine.details');
Route::get('/wines', [Controllers\WineController::class,'index'])->name('wine.index');

require __DIR__.'/auth.php';