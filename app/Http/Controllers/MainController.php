<?php

namespace App\Http\Controllers;

use App\Models\Img;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function  index()
    {
        return view('index');
    }
    public function  about()
    {
        return view('about');
    }
    public function  contact()
    {
        return view('contact');
    }



    public function  gallery()
    {

        $data = Img::all();

        return view('galerea')->with('data',$data);

    }
    public function  mastera()
    {
        return view('mastera');
    }
    public function  uslugi()
    {
        return view('uslugi');
    }
}
