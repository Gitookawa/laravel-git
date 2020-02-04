<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladetest extends Controller
{
	public function index()
	{

          $data = ['msg'=>'お名前を入力してください',
	   ];
	   
	    return view('bladetest.index',$data);
	}

	public function post(Request $request)
	{
		$msg = $request->msg;

		$data = [
		'msg'=>'こんにちわ、' . $msg .'さん!',
	];
		return view('bladetest.index',$data);
	}
}
