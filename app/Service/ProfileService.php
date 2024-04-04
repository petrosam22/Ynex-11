<?php 


namespace App\Service;

use App\Service\UploadImageService;
use App\Http\Requests\UpdateProfileRequest;
use App\Interfaces\ProfileRepositoryInterface;

class ProfileService{

 

    private ProfileRepositoryInterface $profileRepository ;
    private UploadImageService $uploadImageService ;

    public function __construct(ProfileRepositoryInterface $profileRepository){
        $this->profileRepository = $profileRepository;
    }

    public function update(UpdateProfileRequest $request , $id){

      
        $data = $request->validated();
        $data['photo'] =  $this->uploadImageService->uploadPhoto($request);

       $profile =  $this->profileRepository->updateProfile($id);
       $profile->update($data);


         
    }
}