<?php


namespace App\Repositories;

use App\Interfaces\StatusRepositoryInterface;

  use App\Models\Status;
 use App\Http\Requests\UpdateStatusRequest;



class StatusRepositories implements StatusRepositoryInterface{


    public function statusCount(){

        return  Status::count();
    }

    
    public function index(){
        return Status::paginate(10);
    }

       public function create(array $data){
        return Status::create($data);
       }
       public function delete($id){
        return Status::find($id);
       }


       public function edit($id){
        return Status::find($id);

       }

       public function update($id){
        return Status::find($id);

        
       }


}
