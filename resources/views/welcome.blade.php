<x-styles/>

<div class="flex flex-col justify-center items-center m-auto my-12 shadow-xl rounded-lg w-4/5  p-12">
    <h1 class="text-gray-500 lg:text-5xl md:text-4xl sm:text-2xl text-xl">Welcome to Online Competition</h1>
    <div class="border border-gray-400 sm:w-3/4 w-full text-center rounded-md m-6 p-6">
        <p class="lg:text-lg md:text-md sm:text-sm text-xs text-gray-700">
            Online Competition is a web application for programmers to grow and improve their programming skills.
            here programmers can compete with other programmers online and also there are many quizes with different
            programming languages with different levels low to high which can help them improve their skills and 
            give their dream job :)
        </p>
    </div>
    <p class="text-orange-300 lg:text-2xl md:text-xl sm:text-sm text-xs">Join Our Community and helps us to improve the app and show better experience</p>
    <div class="m-2 text-center">
        <div class="my-6">
            <a class="sm:text-xl text-blue-700 font-medium border border-blue-800 py-1 px-8 rounded-md duration-500 hover:px-12 hover:bg-blue-600 hover:text-white hover:border-white" href="{{route('register')}}">Join Us</a>
        </div>
        <div class="my-6">
            <a class="sm:text-xl text-green-600 font-medium border border-green-700 py-1 px-8 rounded-md duration-500 hover:px-12 hover:bg-green-600 hover:text-white hover:border-white" href="{{route('login')}}">Have Account</a>
        </div>
    </div>
</div>