<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ookawaController extends Controller
{
	public function fukusu(){

	    $msg = "複数の";
            $msg1 = "メッセージを送ります";

          return view('ookawa.fukusu',compact('msg','msg1'));
	
	}

	public function form(){
            
		$data = ['msg'=>'お名前を入力して下さい',
		];
		$data1 = ['msg1'=>'お名前を入力して下さい',
                ];

		return view('ookawa.form',$data,$data1);
	//	return view('ookawa.fukusu',compact('data','data1'));
	}

	public function formpost(Request $request)
	{
		$msg = $request->msg;
		$msg1 = $request->msg1;


		$data = [
			'msg'=>'こんにちわ' .$msg. 'さん!',
		];
		
		$data1 = [
                        'msg1'=>'こんにちわ' .$msg1. 'さん!',
		];

              // return view('ookawa.fukusu',compact('data','data1'));
	       return view('ookawa.form',$data,$data1);
	   
	}
	
	public function form1(){
	
		$data = '値を入力してください';
		$data1 = 'もう一つ値を入力して下さい';

		return view('ookawa.form1',compact('data','data1'));
	}

	public function formpost1(Request $request)
	{
		$syamu = $request->syamu;
                $syamu1 = $request->syamu1;


                $data = 'こんにちわ' .$syamu. 'さん';

                $data1 = 'こんにちわ' .$syamu1. 'さん';

               return view('ookawa.form1',compact('data','data1'));
              // return view('ookawa.form',$data,$data1);
	
	}

	public function ifblade()
	{
		$data = ['msg'=>''];
		return view('ookawa.if',compact('data'));
		// return view('ookawa.if',['msg'=>'']);
	}
	
	public function ifpost(Request $request)
	{
		// $data = ['msg'=>$request->msg];

		//return view('ookawa.if'compact('data'));

	 return view('ookawa.if',['msg'=>$request->msg]);
	}



	public function foreachs()
	{
		$data = ['one','two','three','four','five'];
		$data1 =['amazon','google','facebook','apple'];
		$data2 = ['1','2','3','4','5','6','7','8','9','10'];
	     return view('ookawa.foreachs',compact('data','data1','data2'));

	}
	
	public function forblade()
	{
		return view('ookawa.for');
        }

} 
