<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladetest2 extends Controller
{
	public function index()
	{
		$data = ['msg'=>'これはbladetest2のサンプルメッセージです','msg2'=>'サンプルメッセージ2です'];
		return view('bladetest2.index',$data);

	}
	
	public function post(Request $request)
	{
		$msg = $request->msg;
		$msg2 = $request->msg2;
		$msg3 = $request->msg3;
		$data = ['msg'=>'こんにちわ,'.$msg.'さん!','msg2'=>'こんにちわ'.$msg2.'さん!','msg3'=>'こんにちわ,'.$msg3.'さん!'];
		return view('bladetest2.index',$data);
	}


}
