<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu3 extends Controller
{
	public function index($syamu='noname',$syamugame='unknown') {
		return <<<EOF
<html>
 <head>
  <title>rensyu3</title>
  <style>
    body {font-size:16pt; color:#999; }
    h1{ font-size:100pt;text-align:right; color:#eee;
       margin:-40px 0px -50px 0px; }
  </style>
 </head>
 <body>
   <h1>Index</h1>
   <p>これは、rensyu3のコントローラのindexアクションです</p>
   <ul>
          <li>syamu: {$syamu}</li>
	  <li>syamugame: {$syamugame}</li>
   </ul>
 </body>
</html>
EOF;
	}
   
}
