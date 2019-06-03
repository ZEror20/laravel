<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Pagination test</title>
  </head>
  <body>
    <table>
      @foreach ($posts as $post)
        <tr>
          <td>{{ $post->title }}</td>
        </tr>
      @endforeach
    </table>

    {{ $posts->links() }}
  </body>
</html>
