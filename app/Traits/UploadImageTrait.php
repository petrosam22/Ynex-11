<?php

namespace App\Traits;
use Illuminate\Http\UploadedFile;

trait UploadImageTrait
{
    protected function validateImage(UploadedFile $file , $folder){





        $fileName = time() . $file->getClientOriginalName(); // Get the original filename
       $destinationPath = public_path($folder);
       $imagePath = $file->move($destinationPath, $fileName); // Concatenate the path and filename

       return $fileName;

   }
}
