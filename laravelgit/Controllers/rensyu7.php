<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu7 extends Controller
{
	public function index()
	{
		$data = ['msg'=>'お名前を入力してください',];
		return view('rensyu7.index',$data);
	
	}
	public function post(Request $request)
	{
		$msg = $request->msg;
		$data = ['msg'=>'こんにちわ'.$msg.'さん',];
		return view('rensyu7.index',$data);
	}
}
