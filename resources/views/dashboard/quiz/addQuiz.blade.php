@extends('layouts.app')

@section('content')
<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Add New Quiz" :subtitle="null" history="Back To Dashboard" :route="route('home')"/>
    <!-- title bar -->
    <!--            Add quiz form             -->
    <section class="w-full">
        <div class="p-4 bg-white shadow-sm m-6 rounded">
            <form action="{{ route('quiz') }}" method="POST">
                @csrf
                <div class="flex flex-row w-full">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="type" class="text-2xl text-gray-500 mb-2">Quiz Type</label>
                        <select name="type" id="type" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('type') ? ' border border-red-400': 'border border-gray-500' }}">
                            <option value="">Choose a quiz type</option>
                            <option value="standard">Standard</option>
                            <option value="competitive">Competitive</option>
                        </select>
                         @error('type')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="language" class="text-2xl text-gray-500 mb-2">Programming Language</label>
                        <input type="text" name="language" id="language" placeholder="language" value="{{ old('language') }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('language') ? ' border border-red-400': 'border border-gray-500' }}" />
                         @error('language')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-row w-full mt-3">
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="time" class="text-2xl text-gray-500 mb-2">Quiz Time</label>
                        <input type="number" name="time" id="time" placeholder="seconds" value="{{ old('time') }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('time') ? ' border border-red-400': 'border border-gray-500' }}" />
                         @error('time')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                    <div class="mt-2 w-full flex flex-col mx-2">
                        <label for="num" class="text-2xl text-gray-500 mb-2">Number of questions</label>
                        <input type="number" name="number" id="num" placeholder="number of questions" value="{{ old('number') }}" class="text-2xl text-purple-600 py-2 px-3 rounded {{ $errors->has('number') ? ' border border-red-400': 'border border-gray-500' }}" />
                         @error('number')
                            <span class="text-red-600 text-center" role="alert">
                                <p class="text-lg"><i class="fas fa-exclamation-circle"></i> &nbsp;{{ $message }}</p>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="w-full text-center mt-6">
                    <input type="submit" class="text-2xl bg-purple-600 text-white px-3 py-2 uppercase rounded hover:bg-purple-800 duration-500 cursor-pointer" value="create new quiz">
                </div>
            </form>
        </div>
    </section>
 </main>
@endsection
