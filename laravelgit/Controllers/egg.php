<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class egg extends Controller
{
	public function index()
		{
			$data = ['msg'=>'これはコントローラから渡されたメッセージです。'];
			return view('egg.index',$data);

		}
}
