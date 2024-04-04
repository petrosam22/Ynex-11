<?php


namespace App\Repositories;

use App\Models\User;
 use App\Interfaces\ProfileRepositoryInterface;
 
class ProfileRepositories implements ProfileRepositoryInterface{

     public function updateProfile($id){

      return  User::find($id);

      
        
    }

 

}