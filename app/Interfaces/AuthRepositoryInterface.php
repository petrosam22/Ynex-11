<?php

namespace App\Interfaces;
use App\Models\User;
interface AuthRepositoryInterface
{
    public function register(array $data);
    public function Login(array $credentials);
    public function verify(User $user ,$code);

   public function logout();

}
