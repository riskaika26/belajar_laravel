<?php

namespace App\Http\Controllers;


use App\Models\Mahasiswa;
use illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function home(){
        return view('welcome');
    }
    public function about(){
        return 'about us';
    }
    public function contact(){
        return  ('Nama : Riska Agustin <br> Nim : D212011026 <br> Kelas : KA7B <br> Email : ristika26@gmail.com');
    }
    
    
public function index()
{
    //
    $data = DB::table('mahasiswa')->get();
        return view("mahasiswas.index")->with('data',$data);
}
}