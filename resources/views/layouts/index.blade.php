@extends('layouts.app')

@section('content')
    <h3 class="mt-3">Movie List</h3>
    <div class="container">
   
            
            
                
                   @foreach ($datas as $data)
                    <div class="col-xs-12 col-md-4">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="{{'https://image.tmdb.org/t/p/w500/'.$data['poster_path']}}" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">{{$data['title']}}</h5>
                              <p class="card-text">{{\Carbon\Carbon::parse($data['release_date'])->format('M d, Y')}}</p>
                              @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home'.'/'.$data["title"].$data["poster_path"].'/'.$data['release_date'])}}" class="btn btn-primary">Add To Favourites</a>
                                @else
                                <a href="{{ route('login') }}" class="btn btn-primary" >Add To Favourites</a>
                                @endauth
                                @endif
                            </div>
                          </div>
                    </div>
                   @endforeach
                        
               
                 
        
    </div>
    <div class='w-25 p-3'>
        {{ $datas->links() }}
    </div>
    
@endsection