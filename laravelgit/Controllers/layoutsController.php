<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutsController extends Controller
{
	public function index()
	{   
	    $data = [ ['name'=>'長沼清','mail'=>'kiyoshi@naganuma'],
		      ['name'=>'明智光秀','mail'=>'hidemi@aketi'],
		      ['name'=>'織田信長','mail'=>'nobunaga@oda']
	      ];
	    $datas = [ ['one'=>'ルフィ','two'=>'ruffy@gmail.com'],
                      ['one'=>'シャンクス','two'=>'syanks@gmail.com'],
                      ['one'=>'カイドウ','two'=>'kaidou@gmail.com']
              ];
	    return view('layouts.index',['data'=>$data],['datas'=>$datas]);
 	    return view('layouts.index',['message'=>'Hello']);
            
        }
}
