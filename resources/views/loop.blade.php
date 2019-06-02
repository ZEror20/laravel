<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Loop test</title>
  </head>
  <body>
    <ul>
      @for ($i = 0; $i < 11; $i++)
        <li>Number: {{ $i }}</li>
      @endfor
    </ul>
  </body>
</html>
