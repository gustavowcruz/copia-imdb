<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmprestimoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('emprestimos', EmprestimoController::class);
