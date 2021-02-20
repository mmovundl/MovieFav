<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
      .container{
        display:grid;
        grid-template-columns: auto auto auto;
      }
    </style>
    <title>Movie Fav</title>
</head>
<body >
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">MovieFav</a>  </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            
            <li class="nav-item">
              <a class="nav-link" href="/index" >Movies</a>
            </li>
            <li class="nav-item">
              @if (Route::has('login'))
                @auth
                  <a class="nav-link disabled" href="#">Favourites</a>   
                @else
                  <a href="{{ url('/home') }}" class="nav-link">Favourites</a>
                  @endauth
                @endif
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
          @if (Route::has('login'))
          <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
              @auth
                  
              @else
                  <a href="{{ route('login') }}" class="btn btn-outline-light ml-4 my-2 my-sm-0" >Login</a>
  
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="btn btn-outline-light my-2 my-sm-0"  >Register</a>
                  @endif
              @endauth
          </div>
      @endif
        </div>
      </nav>
    
    @yield('content')
</body>
</html>