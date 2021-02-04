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

Route::get('/', 'FamilyController@index')->name('families.index');
Route::post('/family/{family}', 'FamilyController@store')->name('families.store');
Route::get('/family/{id}', 'FamilyController@show')->name('families.show');