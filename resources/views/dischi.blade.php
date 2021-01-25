<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/dischi.css">
    <title>Document</title>
</head>
<body>
    <div id="root">
        <header>
          <div class="container">
            <img src="img/logo.png" alt="logo" />
          </div>
          
  
        </header>
  
        <div class="cds-container container">
            @foreach ($data['response'] as $cd)
            <div class="cd">
                <img src="{{ $cd['poster'] }}" alt="poster">
                <h3>{{ $cd['title'] }}</h3>
                <span class="author">{{ $cd['author'] }}</span>
                <span class="year">{{ $cd['year'] }}</span>
            </div>
           @endforeach
        </div>
  
      </div>
  
      
</body>
</html>