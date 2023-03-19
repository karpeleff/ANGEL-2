<?php

namespace App\Http\Controllers;

use App\Models\User;
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
    public function index()
    {
   // dd(Auth::user()->is_admin);

        if(Auth::check() && Auth::user()->is_admin==0)
        {
            return view('user');
        }else{
            return view('home');
        }



    }

    public    function  set_admin()
    {
        $user = User::find(1);
        $user->is_admin = 1;
        $user->save();

        echo 'ok';
    }
}
