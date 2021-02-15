
<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')
      ->name('home');

Route::post('/user/photo/update', 'HomeController@photoUpdate')
      ->name('photo-update');

Route::get('/user/photo/delete', 'HomeController@photoDelete')
      ->name('photo-delete');
