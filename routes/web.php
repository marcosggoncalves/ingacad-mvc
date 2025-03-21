<?php

use Illuminate\Support\Facades\Route;
 
Auth::routes();

Route::get('/', function () {
  return redirect()->route('login');
});

Route::resource('clientes', App\Http\Controllers\ClienteController::class);
