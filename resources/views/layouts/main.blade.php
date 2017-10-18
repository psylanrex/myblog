<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Capital Direct</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('includes.navs.main-nav')
@yield('content')
@include('includes.footer.main')
</body>
</html>