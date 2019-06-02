<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Foreach test</title>
  </head>
  <body>
    <ul>
      @foreach ($values as $value)
        <li>Number: {{ $value }}</li>
      @endforeach
    </ul>
  </body>
</html>
