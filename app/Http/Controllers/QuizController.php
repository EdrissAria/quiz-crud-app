<?php

namespace App\Http\Controllers;

use App\Models\Option;
use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $unc_quiz = Quiz::where('status', 'uncompleted')->get();
        $com_quiz = Quiz::where('status', 'completed')->get();
        $quiz = Quiz::all(); 
        $grouping = Quiz::all()->groupBy('language')->count();
        $totalQuestion = Question::all()->count();
        $totalOptions = Option::all()->count();
        $count = 1;
        return view('dashboard.quiz.index', ['quiz' => $quiz,'unc_quiz' => $unc_quiz,'com_quiz' => $com_quiz , 'count' => $count,'totalOptions'=> $totalOptions, 'grouping' => $grouping,'totalQuestion' => $totalQuestion, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.quiz.addQuiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'language' => 'required|string|max:10',
            'time' => 'required|numeric|min:10|max:99',
            'number' => 'required|numeric|min:5|max:99',
        ]);

        Quiz::create([
            'admin_id' => Auth::user()->id,
            'type' => $request->type,
            'language' => $request->language,
            'time' => $request->time,
            'question_num' => $request->number,
            'status' => 'uncompleted'
        ]);

        return redirect()->route('quiz')->with('success', 'quiz has been added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $questions = Question::where('quiz_id',$id)->get();
        $quiz = Quiz::find($id);
        $count = 1;
        return view('dashboard.questions.index', ['questions'=> $questions, 'quiz' => $quiz, 'count' => $count]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = Quiz::find($id);
        return view('dashboard.quiz.editQuiz')->with('quiz', $quiz);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'language' => 'required|string|max:10',
            'time' => 'required|numeric|min:10|max:99',
            'number' => 'required|numeric|min:5|max:99',
        ]);

        Quiz::where('id', $id)->update([
            'type' => $request->type,
            'language' => $request->language,
            'time' => $request->time,
            'question_num' => $request->number,
        ]);

        return redirect()->route('quiz')->with('success', 'quiz has been updated successfully!');
    }

    /**
     * change status of quiz from uncompleted to completed.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function complete($quizId)
    {
        Quiz::where('id', $quizId)->update(['status' => 'completed']);
        return redirect()->route('quiz'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quiz = Quiz::find($id);
        $quiz->delete();
        return redirect()->route('quiz')->with('success', 'quiz has been deleted successfully!');
    }
}
