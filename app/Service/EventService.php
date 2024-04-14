<?php

namespace App\Service;
use Carbon\Carbon;
use App\Models\Event;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Jobs\EventReminderJob;
use Illuminate\Support\Facades\Cache;
use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Interfaces\EventRepositoryInterface;
use Illuminate\Support\Facades\Notification;
use App\Notifications\CreateEventNotifiaction;

class EventService
{
    private EventRepositoryInterface $eventRepositories ;

    public function __construct(
        EventRepositoryInterface $eventRepositories
     ){
        $this->eventRepositories = $eventRepositories;
     }


     public function store(CreateEventRequest $request){
          $event =   $this->eventRepositories->store($request);


           Notification::send($event->user,new CreateEventNotifiaction($event->name));

        $this->remind();

                return redirect()->back();

    }

    public function index(){
        return   $this->eventRepositories->index();
    }
    public function close($id){
        $status = Status::where('model','event')->where('name','completed')->first();
        $event=   $this->eventRepositories->getById($id);
        $event->status_id = $status->id;
        $event->save();
        return redirect()->back();
    }
    public function cancel($id){
        $status = Status::where('model','event')->where('name','cancel')->first();
        $event=   $this->eventRepositories->getById($id);
        $event->status_id = $status->id;
        $event->save();
        return redirect()->back();
    }
    public function accept($id){
        $status = Status::where('model','event')->where('name','inprogress')->first();
        $event=   $this->eventRepositories->getById($id);
        $event->status_id = $status->id;
        $event->is_accept = true;
        $event->save();
        return redirect()->back();
    }

        public function update(UpdateEventRequest $request ,$id){
            $event=   $this->eventRepositories->getById($id);

            $event->update($request->all());
            return redirect()->route('event.timeline');

         }
        public function edit($id){
            return $this->eventRepositories->getById($id);



        }


        public function remind()
        {
            $alreadyDispatched = Cache::get('already_dispatched', []);

            $events = Event::where('date', Carbon::today())->get();

            foreach ($events as $event) {
                $eventTime = explode(':', $event->from);
                $desiredStartTime = Carbon::createFromTime($eventTime[0], $eventTime[1], $eventTime[2]);

                // Check if the event has already been dispatched
                if (in_array($event->id, $alreadyDispatched)) {
                    continue;
                }

                // Dispatch the job with the calculated delay
                EventReminderJob::dispatch($event)->delay($desiredStartTime);
                $alreadyDispatched[] = $event->id;
            }

            Cache::put('already_dispatched', $alreadyDispatched);
        }


}
