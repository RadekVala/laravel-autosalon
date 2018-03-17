<!DOCTYPE html>
<html>
  <head>
    <title>Vložit auto</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
    <h1>Vložit auto</h1>

    <form method="post" action="
    {{ action('CarController@store') }}
    ">
        {{ csrf_field() }}
        Vyrobce: <input type="text" name="make"><br>
        Model: <input type="text" name="model"><br>
        Vyrobeno: <input type="date" name="produced_on"><br>

        <input type="submit" value="Vložit">

    </form>
   
  </body>
</html>