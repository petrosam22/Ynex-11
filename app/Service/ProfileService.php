<?php


namespace App\Service;

 use Illuminate\Http\Request;
use App\Service\UploadImageService;
 use App\Interfaces\ProfileRepositoryInterface;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UpdateProfileNotification;


class ProfileService{



    private ProfileRepositoryInterface $profileRepository ;
    private UploadImageService $uploadImageService ;

    public function __construct(ProfileRepositoryInterface $profileRepository , UploadImageService $uploadImageService){
        $this->profileRepository = $profileRepository;
        $this->uploadImageService = $uploadImageService;
    }

    public function update(Request $request , $id){

        $user =  $this->profileRepository->updateProfile($id);
        $photo= $request->hasFile('photo') ?  $this->uploadImageService->uploadPhoto($request): $user->photo;

       

       $user->update([
        'name'=> $request->name,  
        'email'=> $request->email,  
        'photo'=> $photo,  
        'bio'=> $request->bio,  
        'phone'=> $request->phone,  
        'position'=> $request->position,  
       ]);

        Notification::send($user,new UpdateProfileNotification());


 return $user;
    }
}
