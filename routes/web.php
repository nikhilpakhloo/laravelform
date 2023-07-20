<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'showUsers'])->name('home');
Route::get('/users/{id}', [UserController::class, 'singleUser'])-> name('view.user');
Route::post('/add', [UserController::class, 'addUser'])->name('addUser');
// Route::get('/update', [UserController::class, 'updateUser']);
Route::post('/update/{id}', [UserController::class, 'updateUser'])->name('update.user');
Route::get('/updatepage/{id}', [UserController::class, 'updatePage'])->name('update.page');

Route::get('/delete/{id}', [UserController::class, 'deleteUser'])-> name('delete.user');


Route::view('newuser','/adduser');







// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
