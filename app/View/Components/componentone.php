<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class componentone extends Component
{
    public $msg;
    public $newmsg;
    public function __construct($msg , $newmsg)
    {
        $this->msg = $msg;
        $this->newmsg = $newmsg;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.componentone');
    }
}
