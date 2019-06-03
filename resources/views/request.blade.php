<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Request test</title>

    <style media="screen">
      .rect {
        width: 40px;
        height: 50px;
        background-color: green;
        margin: 3px;
      }
    </style>
  </head>
  <body>
    <div class="rect"></div>

    <br><br>

    <pre>
      <?php
        print_r($request->file('some_file'));
      ?>
    </pre>
  </body>
</html>
