<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveModal extends Component
{

    public $showModal ='hidden';

    protected $listeners=[
        'showModal'
    ];

    public function showModal($user){
        $this->showModal ='';
    }

    public function cerrarModal(){
        $this->showModal ='hidden';
    }

    public function render()
    {
        return view('livewire.live-modal');
    }
}
