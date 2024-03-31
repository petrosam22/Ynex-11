<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile(){
        return view('user.profile');
    }

    public function setting(){
        return view('user.setting');
    }
}
