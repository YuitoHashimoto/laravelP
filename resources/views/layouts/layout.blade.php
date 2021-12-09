<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <title>Yuito's - @yield('title')</title>
</head>
<body>
    @yield('content')
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>