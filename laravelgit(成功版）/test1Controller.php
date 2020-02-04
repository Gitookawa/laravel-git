<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test1Controller extends Controller
{
	public function index()
	{
		$data =[ ['info'=>'桜井翔','sub'=>'芸能人'],
			 ['info'=>'タモリ','sub'=>'司会業'],
			 ['info'=>'長沼正和','sub'=>'生活指導員'],
			 ['info'=>'開発光','sub'=>'映像クリエーター'],
			 ['info'=>'尾田栄一郎','sub'=>'漫画家'],
		 ];
		return view('test1.index',['data'=>$data]);
	}
}
