<?php


namespace App\Repositories;

 use App\Models\User;
 use Illuminate\Support\Facades\Auth;
use App\Interfaces\AuthRepositoryInterface;
use NextApps\VerificationCode\VerificationCode;


class AuthRepositories implements AuthRepositoryInterface{

    public function register(array $data)
    {
        return User::create($data);
    }


    public function Login(array $credentials)
    {

        return   Auth::attempt($credentials);


    }




    public function verify($user,$code)
    {

        $user =User::where('id',Auth::user()->id)->first();
        return   VerificationCode::verify($code, $user->email);

    }
    public function logout(){
        return  auth()->logout();
    }





}
