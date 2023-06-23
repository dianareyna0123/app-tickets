<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ComponentInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $label;
     public $placeHolder;
     public $name;
     public $type;
    public function __construct(string $label, string $placeHolder, string $name, string $type='text')
    {
        //
        $this -> label = $label;
        $this -> placeHolder = $placeHolder;
        $this -> name = $name;
        $this -> type = $type;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.component-input');
    }
}
