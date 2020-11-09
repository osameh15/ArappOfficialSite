<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LoginInput extends Component
{

    public $type;
    public $name;
    public $value;
    public $placeholder;

    public function __construct($type, $name, $value=null, $placeholder)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
        $this->placeholder = $placeholder;
    }

    public function render()
    {
        return view('components.login-input');
    }
}
