<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Capital Direct - Management</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
</head>
<body>
@include('includes.navs.main-nav')
@include('includes.navs.manage-nav')
<div class="management-area" id="app">
    <div class="box m-t-25">
        @include('includes.notifications.form-message')
        @yield('content')
    </div>
</div>

<!-- Scripts -->
<script src="{{ asset('/js/app.js') }}"></script>
@yield('scripts')
</body>
</html>