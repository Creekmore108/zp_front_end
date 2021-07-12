<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Modal extends Component
{
    public $showInDevModal = false;

    public function show()
    {
        $this->showInDevModal = true;
    }
}
