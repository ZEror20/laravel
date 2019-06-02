<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>If test</title>
  </head>
  <body>
    <div class="number">
      @if ($number > 100)
        Your route parameter is more than 100
      @elseif ($number > 10)
        Your route parameter is more than 10
      @else
        Your route parameter is less than 10
      @endif
    </div>
  </body>
</html>
