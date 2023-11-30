<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Task App</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body >
<header class="bg-white">
  <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
    <div class="flex lg:flex-1">
      <a href="#" class="-m-1.5 p-1.5">
        <span class="sr-only">Your Company</span>
        <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
      </a>
    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
      </div>

      <a href="{{route('intern.tasks.index')}}" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
      <a  href="http://127.0.0.1:8000/profile" class="text-sm font-semibold leading-6 text-gray-900">Profile</a>


    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <form method="POST" action="{{ route('logout') }}">
                @csrf

                     <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        this.closest('form').submit();" class="text-sm font-semibold leading-6 text-gray-900">Log out <span aria-hidden="true">&rarr;</span></a>

            </form>

    </div>
  </nav>
</header>
<div class="mx-10">

        @yield('content')
 </div>
    
</body>
</html>