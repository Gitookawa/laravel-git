<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class first extends Controller
{
	public function index($id='noname',$pass='unknown'){

		return <<<EOF

<html>
<head>
<title>First/Index</title>
<style>
body {font-size:16pt; color:#999; }
h1{ font-size:100pt; text-align:right; color:#eee;
   margin:-40px 0px -50px 0px;}
</style>
</head>
<body>
  <h1>Index</h1>
  <p>これはFirstのコントローラのindexアクション</p>
  <ul>
    <li>ID: {$id}</li>
    <li>PASS:{$pass}</li>
  </ul>
</body>
</html>
EOF;
	}

}
