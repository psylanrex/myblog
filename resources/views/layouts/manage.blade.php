<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Capital Direct - Management</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
@include('includes.main-nav')
@include('includes.manage-nav')
<div class="management-area" id="app">
    @yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
@yield('scripts')
</body>
</html>