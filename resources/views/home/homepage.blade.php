<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('assets/home/css/app.css') }}" rel="stylesheet">
</head>
<body>
<h1>疯子世界</h1>
<!-- Scripts -->
<script src="{{ mix('assets/home/js/app.js') }}"></script>
</body>
</html>
