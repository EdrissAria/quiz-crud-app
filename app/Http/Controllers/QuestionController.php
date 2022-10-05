<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Option;
use App\Models\Quiz;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($quiz_id)
    {
        $quiz = Quiz::find($quiz_id);
        return view('dashboard.questions.create')->with('quiz', $quiz);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($quiz_id, Request $request)
    {
        $request->validate([
            'question' => 'required|min:4|string',
            'option_num' => 'required|min:2|max:4|integer'
        ]);

        $question = Question::create([
            'quiz_id' => $quiz_id,
            'question' => $request->question,
            'option_num' => $request->option_num
        ]);

        return redirect()->route('quiz.show', ['quiz' => $quiz_id])->with('success', 'question has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($quiz_id, $question_id)
    {
        $quiz = Quiz::find($quiz_id);
        $question = Question::find($question_id);
        $options = Option::where('question_id', $question_id)->get();
        $count = 1;
        return view('dashboard.questions.show', ['quiz' => $quiz, 'question' => $question, 'options' => $options, 'count' => $count]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($quiz_id, $question_id)
    {
        $quiz = Quiz::find($quiz_id);
        $question = Question::find($question_id);
        $options = Option::where('question_id', $question_id)->get();
        $count = 1;
        return view('dashboard.questions.edit', ['quiz' => $quiz, 'question' => $question, 'options' => $options, 'count' => $count]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $quiz_id, $question_id)
    {
        $request->validate([
            'question' => 'required|string|min:5',
            'answer' => 'required|string',
        ]);

        $question = Question::where('id', $question_id)->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        $options = Option::where('question_id', $question_id)->get();

        foreach($options as $option){
            Option::where('id', $option->id)->update([
                'option' => $request->option[$option->id]
            ]);
        }

        return redirect()->route('quiz.question.show', ['quiz'=> $quiz_id, 'question' => $question_id])->with('success', 'Question has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($quiz_id, $question_id)
    {
        Question::where('id', $question_id)->where('quiz_id', $quiz_id)->delete();
        return redirect()->route('quiz.show', ['quiz'=> $quiz_id])->with('success', 'question has been deleted successfully!');
    }
}
