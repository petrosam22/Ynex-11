<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Service\EventService;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    private EventService $EventService ;

    public function __construct(EventService $EventService){
        $this->EventService = $EventService;
    }


    public function createForm(){
        $status = Status::where('model' , 'event')->where('name','reminder')->first();
        return view('event.create',compact('status'));
    }

    public function timeline(Request $request){
        $searchQuery = $request->input('search');
        $events = Event::query();
         if ($searchQuery) {
            $events->where('name', 'LIKE', '%' . $searchQuery . '%')->
            orWhere('description','LIKE','%' . $searchQuery . '%')->
            orWhere('date','LIKE','%' . $searchQuery . '%')
            
            ->get();

        }

        $events = $events->paginate(10);

        return view('event.timeline', compact('events'));

    }
    public function store(CreateEventRequest $request){
         $this->EventService->store($request);
         return redirect()->back();
    }
    public function index(){
        $events= $this->EventService->index();

        return view('event.calendar',compact('events'));
        }
    public function close($id){
        return $this->EventService->close($id);

        // return redirect()->back();

    }
    public function cancel($id){
        return $this->EventService->cancel($id);


    }
    public function accept($id){
        return $this->EventService->accept($id);


    }
    public function update(UpdateEventRequest $request,$id){
        return $this->EventService->update($request,$id);

        // return redirect()->back();

    }
    public function edit( $id){
        $event= $this->EventService->edit($id);
        $statuses = Status::all();

        return view('event.edit',compact('event','statuses'));

    }
    public function remind( ){
     return     $this->EventService->remind();


        //   return redirect()->back();

    }
}
