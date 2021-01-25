<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document @yield('title')</title>
</head>
<body>
    <header>
     @include('common.header')
     </header>


     @section('main')
     <h1>Tutto ok</h1>
     @show

     @include('common.footer')
     <h5>@yield('greeting')</h5>

    
  

   
    
</body>
</html>