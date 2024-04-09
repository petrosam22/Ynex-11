<?php


namespace App\Service;
 use App\Http\Requests\StatusRequest;

 use App\Interfaces\StatusRepositoryInterface;
 use App\Http\Requests\UpdateStatusRequest;

class StatusService
{

    private StatusRepositoryInterface $statusRepositoryInterface ;


    public function __construct(  StatusRepositoryInterface $statusRepositoryInterface ){
        $this->statusRepositoryInterface = $statusRepositoryInterface;

    }

    public function statusCount(){
       return  $this->statusRepositoryInterface->statusCount();
    }
    public function index(){
       return  $this->statusRepositoryInterface->index();
    }

    public function create(StatusRequest $request){

        return  $this->statusRepositoryInterface->create($request->all());

    }


    public function delete($id){
        $status=  $this->statusRepositoryInterface->delete($id);

     return   $status->delete();

    }
    public function edit($id){
        $status=  $this->statusRepositoryInterface->edit($id);

     return   $status;
    }
    public function update(UpdateStatusRequest $request,$id){
        $status=  $this->statusRepositoryInterface->update($id);
        $status->update($request->all());
     return   $status;
    }


}
