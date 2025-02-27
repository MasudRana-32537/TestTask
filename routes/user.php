<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('user', UserController::class);
Route::get('user-datatable', [UserController::class, 'dataTable'])->name('user.datatable');
