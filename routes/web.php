<?php

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

Route::get('/food', [App\Http\Controllers\PizzaController::class,'index'])->name('food.index');
Route::post('/food/create', [App\Http\Controllers\PizzaController::class,'save'])->name('food.save');
Route::get('/food/create', [App\Http\Controllers\PizzaController::class,'create'])->name('food.create');
Route::get('/food/{id}', [App\Http\Controllers\PizzaController::class,'show'])->name('food.show');
Route::delete('/food/{id}', [App\Http\Controllers\PizzaController::class,'destroy'])->name('food.destroy');

Auth::routes(
    // ['register' => false,]
   );

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
