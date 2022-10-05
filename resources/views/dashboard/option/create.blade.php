@extends('layouts.app')

@section('content')
<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Question: " :subtitle="$question->question" history="back to questions" :route="route('quiz.show', ['quiz' => $quiz_id])"/>
    <!-- title bar -->
    <!--            Add quiz form             -->
    <section class="w-full">
        <div class="p-4 bg-white shadow-sm m-6 rounded">
            <form action="{{ route('quiz.question.option.store', ['quiz' => $quiz_id, 'question' => $question]) }}" method="POST">
                @csrf
                @for ($i = 1; $i <= $question->option_num; $i++)
                    <div class="flex flex-row w-full mt-3">
                        <div class="mt-2 w-full flex flex-col mx-2">
                            <label for="opt_{{ $i }}" class="text-2xl text-gray-500 mb-2">Opiton {{ $i }}</label>
                            <input type="text" name="option_{{ $i }}" required id="opt_{{ $i }}" placeholder="option {{ $i }}" value="{{ old('option_'.$i) }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('time') ? ' border border-red-400': 'border border-gray-500' }}" />
                            @error('option_{{ $i }}')
                                <span class="text-red-600 text-center" role="alert">
                                    <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                @endfor
                <div class="flex flex-row w-full mt-3">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="answer" class="text-2xl text-gray-500 mb-2">Correct Option</label>
                        <input type="text" name="answer" id="answer" placeholder="correct option" value="{{ old('answer') }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('time') ? ' border border-red-400': 'border border-green-500' }}" />
                         @error('answer')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="w-full text-center mt-6">
                    <input type="submit" class="text-2xl bg-purple-600 text-white px-3 py-2 uppercase rounded hover:bg-purple-800 duration-500 cursor-pointer" value="Add Opitons">
                </div>
            </form>
        </div>
    </section>
 </main>
@endsection
