<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Include test</title>

    <style>
      .rect {
        width: 100px;
        height: 50px;
        background-color: green;
        margin: 10px;
      }
    </style>
  </head>
  <body>
    <div class="rect"></div>
    <p>
      @include('partials.button', ['href_url' => 'https://google.com', 'text' => 'Google'])
    </p>
  </body>
</html>
