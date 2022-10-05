@extends('layouts.app')

@section('content')
<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Add New Question For Quiz " :subtitle="$quiz->language" history="Back to dashboard" :route="route('home')"/>
    <!-- title bar -->

    <!--            Add quiz form             -->
    <section class="w-full">
        <div class="p-4 bg-white shadow-sm m-6 rounded">
            <form action="{{ route('quiz.question.store', ['quiz' => $quiz->id]) }}" method="POST">
                @csrf
                <div class="flex flex-row w-full">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="que" class="text-2xl text-gray-500 mb-2">Question</label>
                        <textarea name="question" id="que" rows="4" placeholder="question.." class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('language') ? ' border border-red-400': 'border border-gray-500' }}" value="{{ old('question') }}"></textarea>
                        @error('question')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row w-full mt-3">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="opt_num" class="text-2xl text-gray-500 mb-2">Number Of Options</label>
                        <input type="number" name="option_num" id="opt_num" placeholder="number of options" value="{{ old('option_num') }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('time') ? ' border border-red-400': 'border border-gray-500' }}" />
                         @error('option_num')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="w-full text-center mt-6">
                    <input type="submit" class="text-2xl bg-purple-600 text-white px-3 py-2 uppercase rounded hover:bg-purple-800 duration-500 cursor-pointer" value="create new question">
                </div>
            </form>
        </div>
    </section>
 </main>
@endsection
