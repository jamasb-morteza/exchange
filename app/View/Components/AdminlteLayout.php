<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AdminlteLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public $current;

    public function render()
    {
        return view('layouts.app_adminlte');
    }
}
