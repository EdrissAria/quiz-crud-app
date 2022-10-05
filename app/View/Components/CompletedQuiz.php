<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CompletedQuiz extends Component
{
    public $quiz; 
    public $count; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quiz, $count)
    {
        $this->quiz = $quiz; 
        $this->count = $count; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.completed-quiz');
    }
}
