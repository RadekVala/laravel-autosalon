<!DOCTYPE html>
<html>
  <head>
    <title> 
        @if ($car)
           Car {{ $car->id }}
        @else
            Nenalezeno
        @endif
    </title>
  </head>
  <body>
    @if ($car)  
        <h1>Car {{ $car->id }}</h1>
        <ul>
        <li>Make: {{ $car->make }}</li>
        <li>Model: {{ $car->model }}</li>
        <li>Produced on: {{ $car->produced_on }}</li>
        </ul>
    @else 
         Nenalezeno
    @endif
  </body>
</html>