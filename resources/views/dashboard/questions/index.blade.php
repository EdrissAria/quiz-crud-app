@extends('layouts.app')

@section('content')

<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Manage Your Question of " :subtitle="$quiz->language" history="{{ $questions->count() > 1 ?
        'Add New Question': 'overhead'}}" :route="route('quiz.question.create', ['quiz' => $quiz->id])"/>
    <!-- title bar -->
    <!-- show quizzes section -->
    <section class="show-questions">
        <div class="my-6 bg-white shadow-sm mx-3 p-4 rounded">
            @if ($questions->isEmpty())
                <div class="bg-white rounded text-center w-full">
                    <h1 class="text-3xl text-gray-600">
                        No question yet!
                    </h1>
                </div>
            @else
            <table class="w-full rounded">
                <thead class="bg-purple-300 rounded">
                    <tr>
                        <th class="p-4 text-xl text-gray-800 font-thin">No.</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Question</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Number Of Option</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Updated at</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Created at</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Edit</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Delete</th>
                        <th class="p-4 text-xl text-gray-800 font-thin">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center bg-gray-100 rounded">
                    @foreach ($questions as $q)
                        <tr>
                            <td class="p-4 text-xl text-gray-800 font-medium">{{ $count++ }}</td>
                            <td class="p-4 text-xl text-gray-800 font-medium">{{ $q->question }}</td>
                            <td class="p-4 text-xl text-gray-800 font-medium">{{ $q->option_num }}</td>
                            <td class="p-4 text-xl text-gray-800 font-medium">{{ $q->updated_at }}</td>
                            <td class="p-4 text-xl text-gray-800 font-medium">{{ $q->created_at }}</td>
                            <td class="p-4"><a href="{{ route('quiz.question.edit', ['quiz' => $quiz->id, 'question' => $q->id]) }}" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-blue-600 bg-green-400 px-8 rounded py-1 text-white uppercase">Edit</a></td>
                            <td class="p-4">
                            <form action="{{ route('quiz.question.destroy', ['quiz' => $q->quiz_id, 'question' => $q->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-red-600 bg-red-400 rounded px-3 py-1 text-white uppercase">delete</button>
                            </form>
                            </td>
                            @if ($q->answer != null)
                                <td class="p-4"><a href="{{ route('quiz.question.show', ['quiz' => $quiz->id, 'question' => $q->id]) }}" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-yellow-600 bg-yellow-400 px-8 rounded py-1 text-white uppercase">Display</a></td>
                            @else
                                <td class="p-4"><a href="{{ route('quiz.question.option.create', ['quiz' => $quiz->id, 'question' => $q->id]) }}" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-blue-600 bg-blue-400 rounded px-3 py-1 text-white uppercase">add option</a></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </section>
    <!-- select status section -->
 </main>
@endsection

