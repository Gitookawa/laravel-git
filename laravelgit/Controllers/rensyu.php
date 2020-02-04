<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rensyu extends Controller
{
	public function index() {
		return <<< EOF
<html>
 <head>
  <title>Rensyu/Index</title>
  <style>
   body { font-size:16pt; color:#999; }
   h1 { font-size:100pt; text-align:right; color:#eee;
		margin:-40px -50px 0px; }
  </style>
 </head>
 <body>
   <h1>Index</h1>
   <p>これはRensyuコントローラーのindexアクションです</p>
 </body>
</html>
EOF;
 } 
}
