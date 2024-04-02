<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profile(){
    
        return view('user.profile');
    }

    public function setting(){
        $user = Auth::user();
        return view('user.setting',compact(
            'user'
        ));
    }
}
