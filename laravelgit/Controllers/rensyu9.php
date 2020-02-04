<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu9 extends Controller
{
   public function index(){
      $data =['one','two','three','four','five'];
       return view('rensyu9.index',['data'=>$data]);
   }
}
