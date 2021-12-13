<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BookedResource;

class BookedResources extends Component
{
    // public $showCreateModal = false;
    public $events = '';
    
    
    /**
     * render
     *
     * @return void
     */
    public function render()
    {
        $this->events = BookedResource::all();
        // $events = BookedResource::select('id','title', 'start', 'end', 'backgroundColor', 'textColor', 'user_name','resource_title','location', )->get();
        // $this->events = json_encode($events);
        // dd($events);
        return view('livewire.booked-resources');
    }

    /**
     * getevent
     *
     * @return $events
     */
    public function getevent()
    {
        $events = BookedResource::select('id','title','start_date','end_date')->get();

        return json_encode($events);
    }

        
    /**
     * addevent
     *
     * @param  mixed $event
     * @return responce()
     */
    public function addevent($event)
    {
        $input['title'] = $event['title'];
        $input['start_date'] = $event['start_date'];
        $input['end_date'] = $event['end_date'];
        BookedResource::create($input);
        return redirect('/');
    }
        
    /**
     * eventDrop
     *
     * @param  mixed $event
     * @param  mixed $oldEvent
     * @return void
     */
    public function eventDrop($event, $oldEvent)
    {
        // dd($event);
        $eventdata = BookedResource::find($event['extendedProps']['id']);
        $eventdata->start_date = $event['start'];
        $eventdata->end_date = $event['end'];
        $eventdata->save();
        
    }
}
