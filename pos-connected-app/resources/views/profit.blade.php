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
        profit
        <div>
            日曜日 : {{$data["sun"]}}
        </div>
        <div>
            月曜日 : {{$data["mon"]}}
        </div>
        <div>
            火曜日 : {{$data["thu"]}}
        </div>
        <div>
            水曜日 : {{$data["wed"]}}
        </div>
        <div>
            木曜日 : {{$data["thr"]}}
        </div>
        <div>
            金曜日 : {{$data["fri"]}}
        </div>
        <div>
            土曜日 : {{$data["sat"]}}
        </div>
    </body>
</html>
