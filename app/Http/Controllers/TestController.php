<?php

namespace App\Models\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {
        $user = User::find(1);
        $todo = $user->todos;
    }
}
