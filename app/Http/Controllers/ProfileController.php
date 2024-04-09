<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Skill;
use Illuminate\Http\Request;
use App\Service\ProfileService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{

    private ProfileService $ProfileService ;

    public function __construct(ProfileService $ProfileService){
        $this->ProfileService = $ProfileService;
    }

    public function profile(){
         $skills = Skill::all();

        return view('user.profile',compact('skills'));
    }


    public function setting(){
        $user = Auth::user();
        return view('user.setting',compact(
            'user'
        ));
    }
    public function notificationsRead(){
        $user = Auth::user();

    foreach ($user->unreadNotifications as $notification) {
        $notification->markAsRead();
    }
return redirect()->back();

}



    public function notifications(){
        $notifications = Auth::user()->notifications;

    
         return view('notifications.index',compact('notifications'));
    }





    public function update(Request $request,$id){
         $profile= $this->ProfileService->update($request,$id);
           return redirect()->route('user.setting');

    }
}
