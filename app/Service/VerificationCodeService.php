<?php


namespace App\Service;
 use App\Http\Requests\AuthRequest;
use NextApps\VerificationCode\VerificationCode;


class VerificationCodeService {
    public function sendVerificationCode(AuthRequest $request){
        VerificationCode::send($request->email);
    }

}
