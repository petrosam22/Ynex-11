<?php

namespace App\Interfaces;
use App\Models\User;
use Illuminate\Http\Request;

interface AuthRepositoryInterface
{
    public function register(array $data);
    public function Login(array $credentials);
    public function verify(User $user ,$code);

   public function logout();
   public function locked();

}
