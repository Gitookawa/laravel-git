<html>
 <head>
  <title>ookawa/for</title>
 </head>
 <style>
  body {font-size:16pt; color:#999; }
  h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
 </style>
 <body>
  <h1>ookawa/for</h1>
   <p>forディレクティブ</p>
   <ol>
    @for($i=1; $i < 100; $i++)
    @if ($i % 2 == 1)
      @continue
    @elseif($i <= 10)
      <li>No,{{$i}}
    @else
        @break
   @endif 
   @endfor
  </ol>
 </body>
</html>


