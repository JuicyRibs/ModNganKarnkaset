<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Kanit:400,700|Open+Sans&display=swap&subset=thai" rel="stylesheet">
        
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="/css/component-style.css">
        <style>

        </style>
</head>
<body>
<div id="nav">
    <navbar-component></navbar-component>
</div>
<div>
    @yield('content')
</div>
<div id="foot">
    <footer-component></footer-component>
</div>
</body>
