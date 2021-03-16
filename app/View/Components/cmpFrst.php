<?php

namespace App\View\Components;

use Illuminate\View\Component;

class cmpFrst extends Component


{
    public $type;
    public $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($message=null)
    {
        
        //$this->type = $type;
        $this->message=$message;
        
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $name="gigel";

        return view('components.cmp-frst',['name'=>$name]);
    }
}
