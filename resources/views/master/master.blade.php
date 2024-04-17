<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('../app.css') }}">
</head>
<body>
@include('master.header')

@yield('content')

@include('master.footer')
</body>
</html>