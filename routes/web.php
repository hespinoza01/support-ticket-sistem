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

Route::get('/', 'PagesController@home');
Route::get('/acerca', 'PagesController@about');
Route::get('/contacto', 'TicketsController@create');
Route::post('/contacto', 'TicketsController@store');
Route::get('/tickets', 'TicketsController@index');

// Ticket Slug
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/editar', 'TicketsController@edit');
Route::post('/ticket/{slug?}/editar', 'TicketsController@update');
Route::get('/ticket/{slug?}/eliminar', 'TicketsController@checkdelete');
Route::post('/ticket/{slug?}/eliminar', 'TicketsController@delete');
