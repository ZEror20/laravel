<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
      .side-bar-module a {
        text-decoration: none;
        padding: 5px;
        color: white;
        background-color: grey;
      }

      .side-bar-module a:hover {
        color: black;
        background-color: green;
      }

      .side-bar-module {
        margin: 15px;
      }
    </style>
  </head>
  <body>
    <div class="modules-container">
      @each('partials.side-bar-module', $modules, 'module')
    </div>
  </body>
</html>
