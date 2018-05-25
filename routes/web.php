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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/set-end-point', 'HomeController@setEndPoint')->name('setEndPoint');

Route::post('/test-webhook', 'HomeController@testWebhook')->name('testWebhook');

Route::post('/webhook/test-success', 'TestHooksController@testSuccess');
