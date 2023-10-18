<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return 'about us';
    }
    public function contact(){
        return  ('ristika26@gmail.com');
    }
    
}
