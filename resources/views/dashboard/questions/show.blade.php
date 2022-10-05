@extends('layouts.app')

@section('content')
<main class="w-10/12 float-right">
     
    <!-- title bar -->
    <x-titlebar title="Edit Question" :subtitle="null" history="go back" :route="route('quiz.show', ['quiz' => $quiz->id])"/>
    <!-- title bar -->

    <!--            Add quiz form             -->
    <section class="w-full">
        <div class="p-4 bg-white shadow-sm m-6 rounded">
            <div class="w-full h-32 rounded-xl bg-gray-300 p-6">
                <h1 class="text-xl text-gray-800">{{ $question->question }}</h1>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                @foreach ($options as $option)
                    <div class="flex justify-between w-full col-span-1 rounded bg-gray-300 px-6 py-2">
                        <h1 class="text-xl text-gray-800">{{ $count++ }}. {{ $option->option }}</h1>
                        <form action="{{ route('quiz.question.option.destroy', ['quiz' => $quiz->id, 'question' => $question->id, 'option' => $option->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="text-xl text-red-600">&Cross;</button>
                        </form>
                    </div>
                @endforeach
            </div>
            <div class="w-full rounded bg-gray-300 px-6 py-2 mt-4">
                <h1 class="text-xl text-gray-800"><span class="text-xl text-green-600 mr-4">Correct: </span>{{ $question->answer }}</h1>
            </div>
            <div class="flex justify-between mt-6">
                <a href="{{ route('quiz.question.edit', ['quiz' => $quiz->id, 'question' => $question->id]) }}" class="text-xl text-white rounded bg-green-600 px-6 py-2">Edit Question</a>
                <button
                    class="text-xl text-white rounded bg-orange-600 px-6 py-2"
                    onclick="event.preventDefault(); document.getElementById('extra-option').style.display='block'"
                >Add Option</button>
            </div>
            <div class="w-full mt-8 hidden" id="extra-option">
                <form action="{{ route('quiz.question.option.signleStore', ['quiz' => $quiz->id, 'question' => $question->id]) }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-4 gap-2">
                        <input type="text" name="option" required value="{{ old('option') }}" class="col-span-3 w-full text-xl text-green-700 px-3 py-2 rounded border border-gray-800" placeholder="add option.." />
                        <button class="col-span-1 text-xl text-white rounded bg-blue-500 px-6 py-2">Add</button>
                    </div>
                    @error('option')
                        <span class="text-red-600 text-center" role="alert">
                            <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                        </span>
                    @enderror
                </form>
            </div>
        </div>
    </section>
 </main>
@endsection
