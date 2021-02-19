<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Movie Fav</title>
</head>
<body class="font-sans bg-blue-900 text-white">
    <nav class="border-b border-gray-800"> 
        <div class="container mx-auto flex items-center justify-between px-4 py-6">
            <ul class="flex items-center">
               
              <li>
                <a href=""><h1 class="text-2xl font-bold"> MovieFav</h1>
                
                </a>
            </li> 
                <li class="ml-16">
                    <a class="hover:text-gray-500" href="">Movies</a>
                </li>
                <li class="ml-6">
                    <a class="hover:text-gray-500"href="">TV Shows</a> 
                </li>
                <li>

                </li>
            </ul>  
                    
        </div>
        @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </nav>
    @yield('content')
</body>
</html>