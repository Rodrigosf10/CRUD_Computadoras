<?php

use App\Http\Controllers\Computadoras;
use Illuminate\Support\Facades\Route;

Route::get('/', [Computadoras::class, 'index']);
Route::get('/contactos', [Computadoras::class, 'contactos']);
Route::get('/create', [Computadoras::class, 'create']);
Route::post('/store', [Computadoras::class, 'store']);
Route::get('/edit/{id}', [Computadoras::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Computadoras::class, 'update'])->name('update');
Route::get('/show/{id}', [Computadoras::class, 'show'])->name('show');
Route::delete('/destroy/{id}', [Computadoras::class, 'destroy'])->name('destroy');