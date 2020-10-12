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



Route::get('/',function (){
    return view('welcome');
});

Route::get('medicaments','App\Http\Controllers\MedicamentController@medicaments');
Route::get('praticiens','App\Http\Controllers\PraticienController@praticiens');
Route::get('visiteurs','App\Http\Controllers\VisiteurController@visiteurs');
Route::get('vueHome','App\Http\Controllers\vueHomeController@vueHome');
