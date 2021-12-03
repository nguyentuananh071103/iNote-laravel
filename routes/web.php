<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('notes')->group(function (){
    Route::get('/',[NoteController::class,"index"])->name("notes.list");
    Route::get('/create',[NoteController::class,"create"])->name("notes.create");
    Route::post('/create',[NoteController::class,"store"])->name("notes.store");
    Route::get('/{id}/detail',[NoteController::class,"show"])->name("notes.detail");
    Route::get('/{id}/update',[NoteController::class,"edit"])->name("notes.edit");
    Route::post('/{id}/update',[NoteController::class,"update"])->name("notes.update");
    Route::get('/{id}/delete',[NoteController::class,"destroy"])->name("notes.delete");
});
