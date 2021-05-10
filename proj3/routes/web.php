<?php

use App\Http\Controllers\CompanyController;
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



Route::resource('cars', 'App\Http\Controllers\CarController');

Route::get('/', 'App\Http\Controllers\CountryController@index');
Route::get('company', 'App\Http\Controllers\CompanyController@index');
Route::get('/company/createcompany','App\Http\Controllers\CompanyController@create');
Route::post('/company/createcompany',[App\Http\Controllers\CompanyController::class, 'store']);
Route::get('/company/{company->id}','App\Http\Controllers\CompanyController@show');
Route::resource('company', 'App\Http\Controllers\CompanyController');

