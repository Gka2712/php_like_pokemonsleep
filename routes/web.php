<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/main',[MainController::class,'index'])->name('pokemonsleep.main');
Route::get('/collect/{id}',[MainController::class,'collect'])->name('pokemonsleep.collect');
Route::get('/reset',[MainController::class,'reset'])->name('pokemonsleep.reset');
Route::get('/cquan',[MainController::class,'cookquantity'])->name('pokemonsleep.cquan');
Route::get('/sleep/create',[SleepController::class,'create'])->name('newsleep.create');
Route::post('/sleep/store',[SleepController::class,'store'])->name('newsleep.store');
Route::get('/cooking',[NutController::class,'index'])->name('nut.index');
Route::get('/pokemonphoto',[MainController::class,'pokemonphoto'])->name('main.photo');
Route::get('/pokemonphoto/{id}',[MainController::class,'pokemondetail'])->name('main.detail');