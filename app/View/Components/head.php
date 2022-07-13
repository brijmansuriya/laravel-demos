<?php

namespace App\View\Components;

use Illuminate\View\Component;

class head extends Component
{
   
    public $title="";
    public function __construct($componentname)
    {
        $this->title=$componentname;
    }

    public function render()
    {
        return view('components.head');
    }
}
