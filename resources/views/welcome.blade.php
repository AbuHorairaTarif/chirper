<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
        <!-- Styles -->

    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-center bg-[url('https://images.unsplash.com/photo-1539664030485-a936c7d29c6e')] bg-cover dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white ">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-white bg-green-500 p-2 hover:bg-orange-500 dark:text-gray-400 dark:hover:text-white rounded-sm duration-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-white bg-green-500 p-2 hover:bg-green-600 duration-500 dark:text-gray-400 dark:hover:text-white ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white bg-orange-500 p-2 hover:bg-orange-600 duration-500 dark:text-gray-400 dark:hover:text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="top-1/2 left-1/2 absolute transform -translate-x-1/2">
                <h1 class="font-bold text-2xl text-center bg-white/40 backdrop-opacity-10 p-4 backdrop-blur-sm"><span class="text-orange-500">Welcome,</span> <span class="text-lime-300 "> @if(Auth::user())
                    {{ Auth::user()->name }}

                    @else Stranger !!!
                @endif </span> </h1>
            </div>
            </div>

        </div>
    </body>
</html>
