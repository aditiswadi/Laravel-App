<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
   
    public function home()
    {
        return view('home');
    }

     public function about()
    {
        return view('about', ['nama' => 'Adit Iswadi']);
    }
}