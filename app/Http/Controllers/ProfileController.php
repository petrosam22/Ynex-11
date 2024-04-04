<?php

namespace App\Http\Controllers;

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

    public function update(Request $request,$id){
         $profile= $this->ProfileService->update($request,$id);
      dd($profile);
         //  return redirect()->route('user.setting');
 
    }
}
