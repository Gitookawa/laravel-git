<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\vali3Request;

class valiController extends Controller
{
   public function vali3(Request $request)
   {
	   return view('ookawa1.vali3',['msg'=>'フォームを入力して下さい']);
   }

   public function vali3post(vali3Request $request)
   {
	   return view('ookawa1.vali3',['msg'=>'正しく入力されました']);
   }

}
