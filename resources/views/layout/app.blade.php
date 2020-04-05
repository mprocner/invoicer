<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Invoicer</title>

</head>

<body>
<h1>invoicer</h1>
<div>
@yield('content')
</div>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

</html>