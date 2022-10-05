@extends('layouts.app')

@section('content')
<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Manage Question" :subtitle="null" history="Go Back" :route="route('quiz.show', ['quiz' => $quiz->id])"/>
    <!-- title bar -->
     
    <!--            Add quiz form             -->
    <section class="w-full">
        <div class="p-4 bg-white shadow-sm m-6 rounded">
            <form action="{{ route('quiz.question.update', ['quiz' => $quiz->id, 'question' => $question->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="option_num" value="{{ $question->option_num }}">
                <div class="flex flex-row w-full">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="que" class="text-2xl text-gray-500 mb-2">Question</label>
                        <textarea name="question" id="que" rows="4" placeholder="question.." class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('language') ? ' border border-red-400': 'border border-gray-500' }}" value="{{ old('question') }}">{{ $question->question }}</textarea>
                         @error('question')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-x-8 w-full mt-3">
                 @foreach ($options as $option)
                    <div class="mt-2 w-full grid-span-1">
                        <div class="flex flex-col">
                            <label for="option" class="text-2xl text-gray-500 mb-2">Opiton</label>
                            <input type="text" name="option[{{ $option->id }}]" id="option" placeholder="option" value="{{ $option->option }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('time') ? ' border border-red-400': 'border border-gray-500' }}" />
                            @error("option.{{ $option->id }}")
                                <span class="text-red-600 text-center" role="alert">
                                    <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                                </span>
                            @enderror
                        </div>
                    </div>
                 @endforeach
                </div>
                <div class="flex flex-row w-full">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="answer" class="text-2xl text-gray-500 mb-2">Correct Option</label>
                        <input type="text" name="answer" id="answer" value="{{ $question->answer }}" class="text-2xl text-green-600 py-2 px-3 rounded {{ $errors->has('language') ? ' border border-red-400': 'border border-gray-500' }}" value="{{ old('question') }}">
                        @error('answer')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="w-full text-center mt-6">
                    <input type="submit" class="text-2xl bg-purple-600 text-white px-3 py-2 uppercase rounded hover:bg-purple-800 duration-500 cursor-pointer" value="update">
                </div>
            </form>
        </div>
    </section>
 </main>
@endsection
