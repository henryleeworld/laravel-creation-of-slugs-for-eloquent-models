<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($slug)
    {
        $user = User::findBySlugOrFail($slug);
        echo __('Name: ') . $user->name . PHP_EOL;
        echo __('Email: ') . $user->email . PHP_EOL;
    }
}
