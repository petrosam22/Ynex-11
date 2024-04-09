<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface PasswordResetRepositoryInterface
{

    public function resetPassword(Request $request);
    public function forgotPassword(Request $request);
}





