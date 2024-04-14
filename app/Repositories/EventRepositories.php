<?php


namespace App\Repositories;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\CreateEventRequest;
use App\Interfaces\EventRepositoryInterface;
use Illuminate\Support\Facades\Date;

class EventRepositories implements EventRepositoryInterface
{

    public function store(CreateEventRequest $request){

         return   Event::create($request->all());
    }


    public function index(){

        return  Event::orderBy('date')->whereNot('status_id',2)->get();


    }
 
    public function getById($id){ 
        return Event::find($id);
    }


  
}
