<?php

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
    return view('index');
});

Route::get('guard', function()
{
    return view('guard');
});

Route::get('inventory', function()
{
    return view('index');
});

Route::get('list', function()
{
    return view('list');
});
Route::get('back', function()
{
    return view('guard');
});
Route::get('book', function()
{
    return view('book');
});
