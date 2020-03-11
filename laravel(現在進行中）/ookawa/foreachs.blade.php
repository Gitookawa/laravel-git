<html>
 <head>
  <title>ookawa/foreachs</title>
 </head>
 <style>
  body {font-size:16pt; color:#999; }
  h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
 </style>
 <body>
  <h1>ookawa/foreachs</h1>
  <p>foreachディレクティブの例</p>
  <ol>
    @foreach($data as $item)
  <li>{{$item}}
    @endforeach
 </ol>
 <p>foreachディレクティブの例２</p>
  <br>
 <ol>
  @foreach($data1 as $items)
  @if($items =='google')
   <p>これは{{$items}}です</p>
  @else
    <li>{{$items}}
  @endif
  @endforeach
 </ol>
 <ol>
  @foreach($data2 as $mono)
    @if($mono % 2 == 1)
     <p>{{$mono}}</p>
   @endif
   @endforeach
 </body>
</html>

