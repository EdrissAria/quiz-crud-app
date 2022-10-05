@if ($quiz->isEmpty())
    <div class="bg-white rounded text-center w-full">
        <h1 class="text-3xl text-gray-600">
            No quiz yet!
        </h1>
    </div>
@else
<table class="w-full rounded">
    <thead class="bg-purple-300 rounded">
        <tr>
            <th class="p-4 text-xl text-gray-800 font-thin">No.</th>
            <th class="p-4 text-xl text-gray-800 font-thin">quiz type</th>
            <th class="p-4 text-xl text-gray-800 font-thin">language</th>
            <th class="p-4 text-xl text-gray-800 font-thin">number</th>
            <th class="p-4 text-xl text-gray-800 font-thin">time</th>
            <th class="p-4 text-xl text-gray-800 font-thin">status</th>
            <th class="p-4 text-xl text-gray-800 font-thin">Edit</th>
            <th class="p-4 text-xl text-gray-800 font-thin">Delete</th>
            <th class="p-4 text-xl text-gray-800 font-thin">Manage</th>
        </tr>
    </thead>
    <tbody class="text-center bg-gray-100 rounded">
        @foreach ($quiz as $que)
            <tr>
                <td class="p-4 text-xl text-gray-800 font-medium">{{ $count++ }}</td>
                <td class="p-4 text-xl text-gray-800 font-medium">{{ $que->type }}</td>
                <td class="p-4 text-xl text-gray-800 font-medium">{{ $que->language }}</td>
                <td class="p-4 text-xl text-gray-800 font-medium">{{ $que->question_num }}</td>
                <td class="p-4 text-xl text-gray-800 font-medium">{{ $que->time }}</td>
                <td class="p-4 text-xl text-gray-800 font-medium">{{ $que->status }}</td>
                <td class="p-4"><a href="{{ route('quiz.edit', ['quiz' => $que->id]) }}" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-green-600 bg-green-400 rounded px-3 py-1 text-white uppercase">edit</a></td>
                <td class="p-4"><form action="{{ route('quiz.destroy', ['quiz' => $que->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-red-600 bg-red-400 rounded px-3 py-1 text-white uppercase">delete</button>
                </form></td>
                <td class="p-4"><a href="{{ route('quiz.show', ['quiz' => $que->id]) }}" class="text-xl hover:bg-gray-600 duration-500 border border-transparent hover:border-blue-600 bg-blue-400 rounded px-3 py-1 text-white uppercase">manage</a></td>
            </tr>
        @endforeach
    </tbody>
</table>
@endif