<?php

namespace App\View\Components;

use Illuminate\View\Component;

class titlebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route; 
    public $title; 
    public $history; 
    public $subtitle;
    public function __construct($route, $title, $history, $subtitle)
    {
        $this->route = $route; 
        $this->title = $title;
        $this->history = $history; 
        $this->subtitle = $subtitle; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.titlebar');
    }
}
