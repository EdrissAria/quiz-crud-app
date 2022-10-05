@if ($checkQuiz() >= $totalQue)
    <form action={{ route('quiz.complete', ['quiz' => $quizId]) }} method="POST">
        @csrf
        <button type="submit" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-yellow-600 bg-yellow-400 rounded px-3 py-1 text-white uppercase">complete</button>
    </form>
@else
    <button class="text-xl duration-500 border border-transparent bg-yellow-200 rounded px-3 py-1 text-white uppercase">complete</button>
@endif
