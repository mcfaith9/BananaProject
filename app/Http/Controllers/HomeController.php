<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Auth;
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
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $collection = collect(['Awesome', 'Happy', 'Cold', 'Hot', 'Thirsty', 'Ugly', 'Nervous', 'Love', 'Angry', 'Blessed', 'Rock', 'Handsome']);
        $collection->random();
        $feel = $collection->random();  

        return view('/home', array('user' => Auth::user(), 'feel' => $feel) );
    }    
}
