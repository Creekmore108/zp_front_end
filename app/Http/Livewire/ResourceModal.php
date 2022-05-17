<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BookedResource;

class ResourceModal extends Component
{
    public $show = false;

    protected $listeners = [
        'show' => 'show'
    ];

    public function show()
    {
        $this->show = true;
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
        return redirect('/demo');
    }
    
}
