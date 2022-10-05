@extends('layouts.app')

@section('content')
<main class="w-10/12 float-right">
    <!-- title bar -->
    <x-titlebar title="Dashboard" :subtitle="null" history="Create New Quiz" :route="route('create-quiz')"/>
    <!-- title bar -->

    <!--_______________________________________Information Cards_________________________________________________-->
    <section class="w-full flex justify-between px-3 my-6 items-center">
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">VALUE</p>
                <p class="text-xl font-medium text-gray-500 m-0 p-0">$10000 <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-users text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">VALUE</p>
                <p class="text-xl font-medium text-gray-500 m-0 p-0">$10000 <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-users text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">VALUE</p>
                <p class="text-xl font-medium text-gray-500 m-0 p-0">$10000 <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-users text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
        <div class="w-1/5 bg-white rounded-md p-3 shadow-sm flex justify-between items-end">
            <div>
                <p class="text-sm text-gray-300">VALUE</p>
                <p class="text-xl font-medium text-gray-500 m-0 p-0">$10000 <span class="ml-2 bg-green-200 text-xs rounded-sm text-green-400">+4.4%</span></p>
            </div>
            <div>
                <i class="fas fa-users text-4xl mr-2 text-gray-200"></i>
            </div>
        </div>
    </section>
    <!--_______________________________________Information Cards_________________________________________________-->

    <!--_______________________________________Graphs_________________________________________________-->
    <section class="graphs px-3">
        <div class="w-full h-72 mt-12">
            <div class="flex justify-between">
                <div class="w-full">
                    <div class="shadow-sm bg-white p-2 rounded-lg">
                        <h1 class="text-purple-600 text-2xl text-center p-3 border-b-2 border-purple-500">Bar Chart</h1>
                        <canvas id="barChart2" height="100"></canvas>
                    </div>
                </div>
                <div class="w-96 ml-12">
                    <div class="shadow-sm bg-white p-2 rounded-lg">
                        <h1 class="text-purple-600 text-2xl text-center p-3 border-b-2 border-purple-500">Pie Chart</h1>
                        <canvas id="barChart1" height="100"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--_______________________________________Graphs_________________________________________________-->

 </main>
@endsection
