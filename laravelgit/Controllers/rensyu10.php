<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu10 extends Controller
{
      public function index(){
      $data =['one','two','three','four','five'];
       return view('rensyu10.index',['data'=>$data]);
   }

}
