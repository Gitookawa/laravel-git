<html>
 <head>
  <title>ookawa/form</title>
 </head>
 <style>
  body {font-size:16pt; color:#999; }
  h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
 </style>
 <body>
  <h1>ookawa/form</h1>
  <p>{{$msg}}</p>
   <p>{{$msg1}}</p>
  <form method="POST" action="/ookawa/form">
      {{ csrf_field() }}
   <input type="text" name="msg">
　　<br>
   <input type="text" name="msg1">
   <input type="submit">
 </form>
 </body>
</html>

