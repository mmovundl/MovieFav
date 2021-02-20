@extends('layouts.app')

@section('content')
    <h3 class="mt-3">Movie List</h3>
    <div class="container">
   
            
            
                
                   @foreach ($datas as $data)
                    <div class="col-xs-12 col-md-4">
                        <div class="card" style="width: 18rem; ">
                            <img class="card-img-top" src="https://cdn.pastemagazine.com/www/system/images/photo_albums/best-movie-posters-2016/large/moonlight-ver2-xlg.jpg?1384968217" alt="Card image cap">
                            <div class="card-body">
                              <h5 class="card-title">MoonLight</h5>
                              <p class="card-text">Feb, 2017</p>
                              @if (Route::has('login'))
                                @auth
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
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