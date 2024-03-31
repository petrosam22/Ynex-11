<?php

namespace App\Http\Controllers;


use App\Service\AuthService;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;


class AuthController extends Controller
{


    private AuthService $AuthService ;

    public function __construct(AuthService $AuthService){
        $this->AuthService = $AuthService;
    }

    public function registerForm(){
        return view('authentication.signUp');
    }

    public function verifyForm(){
        return view('authentication.verification');
    }
    public function loginForm(){
        return view('authentication.signIn');
    }

    public function register(AuthRequest $request) {
        $user = $this->AuthService->register($request);

        return redirect()->route('user.loginForm');
        }


    public function Login(Request $request)
    {

     return     $this->AuthService->Login($request);


    }

    public function verify(Request $request){


        return     $this->AuthService->verify($request);


    }
    public function logout()
    {

       $this->AuthService->logout();
       return redirect()->route('user.loginForm');


    }
}
