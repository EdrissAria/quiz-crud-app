<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Online Competition</title>
    <!-- meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <!-- Scripts -->
    <script src="{{ asset('js/tcss.js') }}"></script>

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="{{ asset('font/css/all.css') }}" rel="stylesheet">

    <!-- Fonts -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-100">
    <!-- main header -->
    <header class="w-10/12 float-right h-14 bg-white border-b-2 border-gray-200 flex justify-between items-center">
        <div class="brand ml-2">
            <p class="text-purple-700 text-2xl font-medium"><a href="#">ONLINE COMPETITION</a></p>
        </div>
        <div class="flex flex-row">
            <div class="settings mr-2 rounded-full w-72 flex justify-center items-center">
                <input type="text" id="search-input" class="border-2 text-purple-500 border-purple-500 w-full rounded-full py-1 px-4 outline-none" placeholder="search here.."/>
            </div>
            <div class="settings mr-3 bg-gray-100 rounded-full w-10 h-10 flex justify-center items-center"><i class="fas fa-search text-purple-600 text-2xl"></i></div>
            <div class="settings mr-3 bg-gray-100 rounded-full w-10 h-10 flex justify-center items-center"><i class="fas fa-bell text-purple-600 text-2xl"></i></div>
            <div class="settings mr-3 bg-gray-100 rounded-full w-10 h-10 flex justify-center items-center"><i class="fas fa-envelope-square text-purple-600 text-2xl"></i></div>
            <div class="profile mr-4"><img src="{{ asset("uploads/".Auth::user()->photo) }}" alt="profile" id="profile" class="img-fluid cursor-pointer rounded-full w-10 h-10"></div>
        </div>
    </header>
    <!-- main sidebar -->
    <aside class="w-2/12 h-screen fixed left-0 top-0 bg-white border-r-2 border-gray-200 p-2">
        <ul>
            <li class="under hover:bg-gray-100 text-lg hover:rounded-md duration-500 py-2 px-3 cursor-pointer my-2 text-gray-400"><i class="fas fa-home mr-3 text-purple-500"></i><a href="/home">Dashboard</a></li>
            <li class="under hover:bg-gray-100 text-lg hover:rounded-md duration-500 py-2 px-3 cursor-pointer my-2 text-gray-400 " id="dropdown"><i class="fas fa-clipboard mr-3 text-purple-500"></i><a href="#">Quizzes</a><span class="float-right">&blacktriangledown;</span></li>
            <div class="bg-white duration-700 w-full hidden" id="menu">
                <a href="{{ route('create-quiz') }}" class="text-gray-400 text-md pl-10 block hover:bg-gray-100 hover:rounded-md duration-500 py-2">Add New Quiz</a>
                <a href="{{ route('quiz') }}" class="text-gray-400 text-md pl-10 block hover:bg-gray-100 hover:rounded-md duration-500 py-2">Manage Quizzes</a>
            </div>
            <li class="under hover:bg-gray-100 text-lg hover:rounded-md duration-500 py-2 px-3 cursor-pointer my-2 text-gray-400"><i class="fas fa-user-circle mr-3 text-purple-500"></i><a href="#">Admins</li>
            <li class="under hover:bg-gray-100 text-lg hover:rounded-md duration-500 py-2 px-3 cursor-pointer my-2 text-gray-400"><i class="fas fa-users mr-3 text-purple-500 "></i><a href="#">Users</li>
        </ul>
    </aside>
    <main>
        @yield('content')
    </main>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/chart.js') }}"></script>
    <script src="{{ asset('js/index.js') }}"></script>
</body>
</html>
