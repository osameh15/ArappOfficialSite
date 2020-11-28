<?php

namespace App\View\Components;

use Illuminate\View\Component;

class userAvatar extends Component
{

    public function __construct()
    {
        //
    }
    public function render()
    {
        return view('components.user-avatar');
    }
}
