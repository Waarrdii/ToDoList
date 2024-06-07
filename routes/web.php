<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get('/todo', [TodoController::class, 'index'])->name('todoIndex');
route::post('/todo', [TodoController::class, 'store'])->name('todoPost');
