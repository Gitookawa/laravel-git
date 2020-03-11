<html>
 <head>
  <title>ookawa/if</title>
 </head>
 <style>
  body {font-size:16pt; color:#999; }
  h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
 </style>
 <body>
  <h1>Blade/IF</h1>
  @if($msg !='')
  <p>こんにちわ{{$msg}}さん</p>
  @else
 <p>何か書いてください</p>
 @endif
  <form method="POST" action="/ookawa/if">
      {{ csrf_field() }}
   <input type="text" name="msg">
   <input type="submit">
 </form>
</html>
