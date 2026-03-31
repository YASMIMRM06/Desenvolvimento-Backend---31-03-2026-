<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/enviar-email', function () {
   dd('Email enviado!'); 
});

   #iremos enviar o email aqui e depois iremos criar uma fila
