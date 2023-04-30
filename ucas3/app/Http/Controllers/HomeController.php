<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    // public function index()
    // {
    //     return view('home');
    // }

    public function index()
    {   
        $student_name = 'ali';
        $average = 95.5;
        // return view('home',['s_avg'=> $average,'s_name'=> $student_name]);

        //Exercise 3.2: returning parameters from the server side
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;


        //Exercise 3.3: returning array parameters from the server side
        $my_array =['Apple','Orange','Banana','Watermillon','Limon'];

        $loop=8;




        return view( 'home',[
        's_avg'=> $average,'s_name'=> $student_name,
        'key1'=>$user_id ,'key2'=>$user_name, 'key3'=>$user_email,'my_array'=>$my_array,
        'loop'=>$loop]);
        
         

    }

}
