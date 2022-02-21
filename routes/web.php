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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\PageController;

Route ::get('/', [PageController::class,'welcome']);

Route ::get('/about', [PageController::class,'nama']);

Route ::get('/article/{id}', [PageController::class,'id']);