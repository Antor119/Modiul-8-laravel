<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersoneController;

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

Route::get('/persone/{name?}', [PersoneController::class, 'persone'])->whereAlpha('name');
Route::get('/personeid/{id?}', [PersoneController::class, 'personeById'])->whereNumber('id');
Route::get('/persone1/{name}/account/{accountId}', [PersoneController::class,'personAccount'])->whereAlpha('name')->whereNumber('accountId');
Route::get('/personeFrom', [PersoneController::class, 'personeFrom']);
Route::post('/personeFrom', [PersoneController::class,'createPersone']);

