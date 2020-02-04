<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class syamu extends Controller
{
	public function index()
	{
		$data = ['msg'=>'これはコントローラーから渡されたメッセージです。'];
		return view('syamu.index',$data);
        }
}
