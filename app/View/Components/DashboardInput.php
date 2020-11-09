<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DashboardInput extends Component
{

    public $type;
    public $name;
    public $placeholder;
    public $value;

    public function __construct($type, $name, $placeholder, $value = null)
    {

        $this->type = $type;
        $this->name = $name;
        $this->placeholder = $placeholder;
        $this->value = $value;
    }


    public function render()
    {
        return view('components.dashboard-input');
    }
}
