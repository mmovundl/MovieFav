<?php

namespace App\Http\Controllers;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

use App\Models\favourites;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $datas= favourites::paginate(9);

        return view('home',[
            'datas'=>$datas
        ]);
    }
    public function create($title,$poster,$date)
    {
        


       $fav_movie = new favourites;
        $fav_movie->title=$title;
        $fav_movie->release_date=$date;
        $fav_movie->poster_path=$poster;
        $fav_movie->save();
     return redirect()->back();
    }
}
