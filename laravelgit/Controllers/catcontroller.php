<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class catcontroller extends Controller
{
   public function index(Request $request, Response $response){
	   $html = <<<EOF
<html>
<head>
<title>Cat/Index</title>
<style>
body { font-size:16pt; color:#999; }
h1 { font-size:120pt; text-align:right; color:#fafafa; 
     margin:-50px 0px -120px 0px; }
</style>
</head>
 <body>
   <h1>Cat</h1>
   <h3>Request</h3>
   <pre>{$request}</pre>
   <pre>{$request->url()}</pre>
   <pre>{$request->fullUrl()}</pre>
   <h3>Response</h3>
   <pre>{$response}</pre>
   <pre>{$response->status()}</pre>  
</body>
</html>
EOF;
	   $response->setContent($html);
	   return $response;
   }
}

