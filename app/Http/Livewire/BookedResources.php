<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\BookedResource;

class BookedResources extends Component
{
    public $showCreateModal = false;
    
    
    public function render()
    {
        return view('livewire.booked-resources');
    }
}
