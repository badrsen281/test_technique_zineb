<?php

use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommandeController;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('{view}', ApplicationController::class)->where('view','test|login|list-commandes|list-produits');

//Route::get('{view}', ApplicationController::class)->where('view','(.*)');


Route::resource('products', ProductController::class);
Route::resource('commandes', CommandeController::class);