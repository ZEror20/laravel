<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Form test</title>
  </head>
  <body>
    <form action="{{ url('request') }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="text" name="some_data"> <br>
      <input type="file" name="some_file"> <br>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
