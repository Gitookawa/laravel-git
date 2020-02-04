<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu8 extends Controller
{
	public function index()
	{
		return view('rensyu8.index',['msg'=>''] );

	}
	public function post(Request $request)
	{
		return view('rensyu8.index',['msg'=>$request->msg]);
	}
}
