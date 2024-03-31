<?php


namespace App\Service;
 use App\Traits\UploadImageTrait;
use App\Http\Requests\AuthRequest;
// UploadImageTrait

class UploadImageService {
    use UploadImageTrait;
    public function uploadPhoto(AuthRequest $request){

        if($request->hasFile('photo')){
            $photo =$request->photo;
         return    $this->validateImage($photo, 'image/user') ;
        }

        return null;
    }
}
