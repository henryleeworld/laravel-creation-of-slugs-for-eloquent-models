<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('user/{slug}', [UserController::class, 'show'])->name('users.show');
