@extends('layouts.app')

@section('content')

<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Manage Your Quizzes" :subtitle="null" history="Back To Dashboard" :route="route('home')"/>
    <!-- title bar -->
    <section class="w-full flex justify-between px-3 my-6 items-center">
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">Total Quizzes</p>
                <p class="text-xl font-medium text-gray-500 ml-6 p-0">{{ $quiz->count() }} <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-clipboard text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">LANGUAGES</p>
                <p class="text-xl font-medium text-gray-500 ml-6 p-0">{{ $grouping }}<span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div class="flex flex-row">
                <i class="fab fa-html5 text-2xl mr-2 text-gray-200"></i>
                <i class="fab fa-css3 text-2xl mr-2 text-gray-200"></i>
                <i class="fab fa-js text-2xl mr-2 text-gray-200"></i>
            </div>
        </div>
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">Total Questions</p>
                <p class="text-xl font-medium text-gray-500 ml-6 p-0">{{ $totalQuestion }} <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-question-circle text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">Total Options</p>
                <p class="text-xl font-medium text-gray-500 ml-6 p-0">{{ $totalOptions }} <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-chalkboard text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
    </section>
    <!--select status section-->
    <section class="show-quizzes">
        <div class="mt-6 bg-white shadow-sm mx-3 p-4 rounded">
            <select name="status" id="status" onchange="selectQuestionType(this.value)" class="w-full border border-gray-400 rounded px-4 py-2 text-xl text-purple-500">
                <option value="uncompleted" class="p-12 text-2xl bg-purple-700 text-gray-50">Uncompleted quizzes</option>
                <option value="completed" class="p-12 text-2xl bg-purple-700 text-gray-50">completed quizzes</option>
            <select>
        </div>
    </section>
    <!--select status section-->

    <!-- show quizzes section -->
    <section class="show-quizzes">
        <div class="my-6 bg-white shadow-sm mx-3 p-4 rounded">
            <div class="uncompleted">
                <x-uncompleted-quiz :quiz="$unc_quiz" :count="$count"/>
            </div>
            <div class="completed hidden">
                <x-completed-quiz :quiz="$com_quiz" :count="$count"/>
            </div>
        </div>
    </section>
    <!-- select status section -->
 </main>
@endsection
