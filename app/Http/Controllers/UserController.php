<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function show($slug)
    {
        $user = User::findBySlugOrFail($slug);
        echo '姓名：' . $user->name . PHP_EOL;
        echo '電子郵件：' . $user->email . PHP_EOL;
    }
}
