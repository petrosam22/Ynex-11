<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\StatusService;
use App\Http\Requests\StatusRequest;
use App\Http\Requests\UpdateStatusRequest;
use App\Models\Status;
 
class StatusController extends Controller
{
    private StatusService $StatusService ;

    public function __construct(StatusService $StatusService){
        $this->StatusService = $StatusService;
    }



   
    public function index(){
        $statusCount =  $this->StatusService->statusCount();

       $statuses =  $this->StatusService->index();

       return view('status.index',compact('statuses','statusCount'));

    }

    public function create(StatusRequest $request){
        $this->StatusService->create($request);

        return redirect()->back();
    }

    public function delete($id){
        $this->StatusService->delete($id);

        return redirect()->back();
    }
    public function edit($id){
      $status=  $this->StatusService->edit($id);

        return view('status.edit',compact('status')) ;
    }
    public function update(UpdateStatusRequest $request,$id){
         $this->StatusService->update($request,$id);

      return redirect()->back();

    }
}
