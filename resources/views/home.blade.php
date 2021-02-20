@extends('layouts.app')

@section('content')
<h3 class="mt-3">Favourite Movies</h3>
<div class="container">

        
        
            
               @foreach ($datas as $data)
                <div class="col-xs-12 col-md-4">
                    <div class="card" style="width: 18rem; ">
                        <img class="card-img-top" src="{{'https://image.tmdb.org/t/p/w500/'.$data['poster_path']}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$data['title']}}</h5>
                          <p class="card-text">{{\Carbon\Carbon::parse($data['release_date'])->format('M d, Y')}}</p>
                        </div>
                      </div>

                </div>
              
               @endforeach
                    
               {{$datas->links()}}
             
    
</div>
@endsection
