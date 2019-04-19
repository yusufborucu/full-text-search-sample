<?php

namespace App\Http\Controllers;

use App\FullTextSearch;
use App\User;

class UserController extends Controller
{
    public function search()
    {
        $text = request()->text;
        $users = User::search($text)->get();
        return $users;
    }
}
