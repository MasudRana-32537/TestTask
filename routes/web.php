<?php

use App\Http\Middleware\checkUserStatus;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return redirect()->route('login');
});
Route::middleware(['auth','verified',CheckUserStatus::class])->group(function () {
    require __DIR__ . '/dashboard.php';
    require __DIR__ . '/user.php';
});
require __DIR__ . '/auth.php';


Route::get('/clear', function () {
    Artisan::call('cache:forget spatie.permission.cache');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    return "Cleared!";
});

