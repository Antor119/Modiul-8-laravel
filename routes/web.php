<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersoneController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\DemoController;

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

//PracticeController

Route::get('/per/{name?}', [PracticeController::class,'index'])->whereAlpha('name');
Route::get('/per1/{name?}/account/{accountId?}', [PracticeController::class, 'store'])->whereAlpha('name')->whereNumber('accountId');
Route::get('/fromData', [PracticeController::class,'update']);
Route::post('/fromData1', [PracticeController::class,'destroy']);

//Response
//string int null blooan reponse
Route::get('/demo1', [DemoController::class,'demo1']);
//Array and Associative array reponse
Route::get('/demo2', [DemoController::class,'demo2']);
//Json Response
Route::get('/demo3', [DemoController::class,'demo3']);
//Response with data, msg code
Route::get('/demo4', [DemoController::class,'demo4']);
//Response Redirect
Route::get('/demo5', [DemoController::class,'demo5']);
//Binary file response
Route::get('/demo6', [DemoController::class,'demo6']);
//File download response
Route::get('/demo7', [DemoController::class,'demo7']);
//Response Cookies
Route::get('/demo8', [DemoController::class,'demo8']);
//Response with header properties
Route::get('/demo9', [DemoController::class,'demo9']);
//Response blade view
Route::get('/demo10', [DemoController::class,'demo10']);

