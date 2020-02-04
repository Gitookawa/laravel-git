<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dog extends Controller
{
	public function __invoke(){
	return <<<EOF
<html>
<head>
<style>
body {font-size: 16pt; color:#999; }
h1 { font-size:30pt; text-align:right:right; color:#eee; 
     margin:-15pt 0px 0px 0px;}
}
</style>
</head>
<body>
  <h1>Sigle Action</h1>
  <p>これは、シングルアクションコントローラーのアクションです。</p>
</body>
</html>
EOF;
    }
}




