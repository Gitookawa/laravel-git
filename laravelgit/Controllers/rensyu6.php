<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu6 extends Controller
{
	public function index()
	{
		$data = ['msg'=>'これはコントローラーから渡されたメッセージです'];
	//	 $datas = ['syamu'=>'シャムさんは大物YOUTUBERです'];

		return view('rensyu6.index',$data);
         //      return view('rensyu6.index',$datas);
                 
		//データを２つ渡せない

	}
}
