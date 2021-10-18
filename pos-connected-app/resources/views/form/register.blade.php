<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
      <h2>csv form</h2>
      <form method="POST" action="/csvs/register" enctype="multipart/form-data" >
        @csrf
        <div>
          <label for="caption">caption</label>
          <input type="text" id="caption" name="caption">
        </div>
        <div>
          <label for="date">date</label>
          <input type="date" id="date" name="date">
        </div>
        <div>
          <label for="csv">csv</label>
          <input type="file" id="csv" name="csv">
        </div>
        <input type="submit" value="送信する">
        </form>
    </body>
</html>
