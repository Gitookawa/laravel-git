<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class syamu1 extends Controller
{
   public function index($id='zero'){
	$data = [
		 'msg'=>'これはコントローラーから渡されたメッセージです',
	         'id'=>$id
		];
	return view('syamu1.index',$data);
  }
}

