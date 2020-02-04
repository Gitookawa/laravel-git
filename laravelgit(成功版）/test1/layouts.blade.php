<!DOCTYPE html>
  <head>
    <meta charset="UTF-8">
      <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>@yield('title')</title>
  </head>
    <h1>@yield('title')</h1>
  <body id="index">
   <div id="wrap">
       @yield('content')
   </div>
  </body>
</html>
