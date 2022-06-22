<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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


Route::delete('/contacts/{name}',[ContactController::class,'destroy'])
->name('contacts.destroy')
->where('name', '[A-Za-z]+');

Route::get('/contacts/{name}',[ContactController::class,'show'])
->name('contacts.show')
->where('name', '[A-Za-z]+');

Route::post('/contacts/{name}',[ContactController::class,'create'])
->name('contacts.create')
->where('name', '[A-Za-z]+');

Route::put('/contacts/{name}',[ContactController::class,'putting'])
->name('contacts.putting')
->where('name', '[A-Za-z]+');