@extends('intern.layout.internlayout')
@section('content')

<!-- <h1 class="text-3xl font-bold underline text-clifford">Intern Dashboard</h1> -->

    <!-- navbar -->
    
    <nav class="relative container mx-auto px-20 py-2 my-0 bg-gray-100">
        <!-- flex container  -->
        <div class="flex items-center justify-between">
            <!-- logo -->
            <div class="pt-2">
                <h1 class="text-2xl font-bold">Intern Dashboard</h1>
            </div>
            <!-- menu items  -->
            <form method="POST" action="{{ route('logout') }}">
               @csrf

               <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="hidden p-2 px-6 pt-2 text-white  bg-red-600 rounded-lg baseline hover:bg-red-400 md:block ">Logout</a>
          </form>      
        </div>
    </nav> 


@endsection
