<html>
 <head>
  <title>ookawa/form1</title>
 </head>
 <style>
  body {font-size:16pt; color:#999; }
  h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
 </style>
 <body>
  <h1>ookawa/form1</h1>
  <p>{{$data}}</p>
   <p>{{$data1}}</p>
  <form method="POST" action="/ookawa/form1">
      {{ csrf_field() }}
   <input type="text" name="syamu">
　　<br>
   <input type="text" name="syamu1">
   <input type="submit">
 </form>
 </body>
</html>

