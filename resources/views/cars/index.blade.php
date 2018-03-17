<!DOCTYPE html>
<html>
  <head>
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/app.css">


  </head>
  <body>
    <h1>{{ $title }}</h1>

    <ul>
        @foreach( $cars as $car)
            <li>
                <a href="{{ action('CarController@show', 
                ['id' => $car->id ]) }}">
                    {{ $car->make }}: {{ $car->model }}
                </a>
            </li>
                
        @endforeach

    </ul>
  </body>
</html>