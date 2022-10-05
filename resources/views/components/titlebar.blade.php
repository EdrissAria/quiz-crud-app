<div id="tooltip" class="absolute right-2 py-2 px-4 bg-white rounded hidden shadow-sm">
    <a class="dropdown-item" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
        {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</div>
@if (session('success'))
    <div class="bg-green-300 mt-4 border border-green-400 p-3 text-3xl relative left-1/2 -translate-x-1/2 text-center w-3/4 text-white animate-pulse rounded">
        {{ session('success') }}
    </div>
@endif
<!--            Title Bar             -->
<section class="w-full h-20 border-b border-gray-200 flex justify-between px-3 items-center">
    <p class="text-gray-600 text-2xl font-medium">{{ $title }}{{ $subtitle }}</p>
    <a href="{{ $route }}" disabled class="text-white bg-purple-800 py-2 px-8 text-xl rounded-lg hover:bg-purple-700 duration-500">{{ $history }}</a>
</section>
<!--            Title Bar             -->