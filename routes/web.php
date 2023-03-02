<?php

use App\Http\Controllers\{
    Usercontroller,
};
use Illuminate\Support\Facades\Route;

Route::get('/users', [Usercontroller::class, 'index'])->name('users.index');
Route::get('/users/create', [Usercontroller::class, 'create'])->name('users.create');
Route::post('/users', [Usercontroller::class, 'store'])->name('users.store');
Route::get('/users/{id}', [Usercontroller::class, 'show'])->name('users.show');

Route::get('/', function () {
    return view('welcome');
});
