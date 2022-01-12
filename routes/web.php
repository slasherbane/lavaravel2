<?php

use App\Http\Controllers\CocktailController;
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

Route::get('/', [CocktailController::class, "home"])->name("home");
Route::get('/cocktails', [CocktailController::class, "show"])->name("cocktails.show");
Route::get("/cocktails/delete/{id}",[CocktailController::class,"delete"])->name("cocktail.delete")->whereNumber("id");
