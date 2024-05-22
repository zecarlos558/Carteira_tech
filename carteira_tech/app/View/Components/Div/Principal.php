<?php

namespace App\View\Components\Div;

use Illuminate\View\Component;

class Principal extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $id;

    public function __construct($id=null)
    {
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.div.principal');
    }
}
