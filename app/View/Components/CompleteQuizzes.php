<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Quiz; 
use App\Models\Question; 

class CompleteQuizzes extends Component
{
    public $quizId;   
    public $totalQue; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($quizId, $totalQue)
    {
        $this->quizId = $quizId; 
        $this->totalQue = $totalQue; 
    }

    public function checkQuiz(){
        return Question::where('quiz_id', $this->quizId)->where('status', 'completed')->count();  
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.complete-quizzes');
    }
}
