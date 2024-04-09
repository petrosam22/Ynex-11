<?php


namespace App\Repositories;

use App\Models\User;
use Illuminate\Http\Request;
use App\Interfaces\PasswordResetRepositoryInterface;

class PasswordResetRepositories implements PasswordResetRepositoryInterface{

    public function resetPassword(Request $request){
        return User::where('email',$request->email)->first();


    }
    public function forgotPassword(Request $request){
 //send a mail with forget password link


 return User::where('email',$request->email)->first();


    }

}
