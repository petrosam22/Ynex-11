<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\PasswordResetService;

class PasswordResetController extends Controller
{
    private PasswordResetService $PasswordResetService ;

    public function __construct(PasswordResetService $PasswordResetService){
        $this->PasswordResetService = $PasswordResetService;
    }


    public function forgetPasswordForm(){

        return view('authentication.forgetPassword');

    }
    public function resetPasswordForm(){

        return view('authentication.resetPassword');

    }


    public function forgetPassword(Request $request){
      return  $this->PasswordResetService->forgotPassword($request);
    }
    
    public function resetPassword(Request $request){
        return  $this->PasswordResetService->resetPassword($request);
        
    }



}
