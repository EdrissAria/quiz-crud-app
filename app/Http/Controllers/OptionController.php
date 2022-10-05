<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\Question;
use App\Models\Quiz;

class OptionController extends Controller
{
    /**
     * Create new option in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create($quiz_id, $question_id, Request $request)
    {
        $question = Question::find($question_id);
        return view('dashboard.option.create', ['quiz_id'=> $quiz_id, 'question' => $question]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($quiz_id, $question_id, Request $request)
    {

        $question = Question::find($question_id);
        $request->validate([
            'answer' => 'required',
        ]);

        for ($i = 1; $i <= $question->option_num; $i++) {
            Option::create([
                'question_id' => $question_id,
                'option' => $request->input("option_$i"),
            ]);
        }

        Question::where('id', $question_id)->update([
            'answer' => $request->answer,
            'status' => 'completed'
        ]);

        return redirect()->route('quiz.show', ['quiz' => $quiz_id])->with('success', 'question has been added successfully!');
    }

    /**
     * Store a single option created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function singleStore($quiz_id, $question_id, Request $request)
    {

        $request->validate([
            'option' => 'required|string',
        ]);

        Option::create([
            'question_id' => $question_id,
            'option' => $request->option,
        ]);

        return redirect()->route('quiz.question.show', ['quiz' => $quiz_id, 'question' => $question_id]);
    }

    /**
     * Store a single option created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy($quiz_id, $question_id, $option_id)
    {
        $question = Question::where('quiz_id', $quiz_id)->where('id', $question_id)->firstOrFail();
        Option::where('question_id', $question->id)->where('id', $option_id)->delete();
        return redirect()->route('quiz.question.show', ['quiz' => $quiz_id, 'question' => $question_id]);
    }
}
