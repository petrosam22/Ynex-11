<?php


namespace App\Service;


use App\Models\User;
use Illuminate\Http\Request;
use App\Jobs\ResetPasswordJop;
use Illuminate\Support\Facades\Hash;
use App\Notifications\NewPasswordNotification;
use App\Interfaces\PasswordResetRepositoryInterface;
use Illuminate\Support\Facades\Notification;


class PasswordResetService {

     private PasswordResetRepositoryInterface $PasswordResetRepository ;

    public function __construct( PasswordResetRepositoryInterface $PasswordResetRepository){

        $this->PasswordResetRepository = $PasswordResetRepository;
    }

    private function sendResetLink($user){

        //send reset password form link  to user email.
        $link = route('user.resetPasswordForm');

        dispatch(new ResetPasswordJop($user,$link));
    }

    public function forgotPassword(Request $request){
        $user =  $this->PasswordResetRepository->forgotPassword($request);
        if($user){
            $this->sendResetLink($user);
            return redirect()->back()->with('message', 'Password reset link sent successfully!');
        }else{
            return redirect()->back()->with('message', 'Email Not Found');


        }
    }


    public function resetPassword(Request $request){
        $user =  $this->PasswordResetRepository->resetPassword($request);
        if($request->password == $request->confirm){

            $user->password = Hash::make($request->password);
            $user->save();
            Notification::send($user,new NewPasswordNotification());

            return redirect()->route('user.loginForm');


        }   else{
            return redirect()->back()->with('message', 'Password And Confirm Password Not Same ');

        }

    }



}
