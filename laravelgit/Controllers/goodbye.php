<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

global $head, $style, $body, $end;
$head = '<html><head>';
$style = <<<EOF
<style>
  body { font-size:16pt; color:#999; }
   h1{ font-size:100pt; text-align: right; color:#eee;
       margin:-40px 0px -50px 0px; }
 </style>
EOF;

$body = '</head><body>';
$end = '</body></head>';

 function tag($tag,$txt){
	return "<{$tag}>".$txt."</{$tag}>";
}
class goodbye extends Controller
{

	public function index() {
	  global $head,$style,$body,$end;

	  $html = $head. tag('title','goodbye/Index'). $style .$body
          .tag('h1','Index').tag('p','this is goodbye index page')
	  .'<a href="/bye/other">go to goodbye Other page</a>'
	  .$end;
    return $html;
	}

	public function other() {
		global $head,$style,$body,$end;

		$html = $head . tag('title','bye/other') . $style . 
		$body
		 . tag('h1','Other') . tag('p','this is Other page')
		 .$end;
	return $html;
	}
}
