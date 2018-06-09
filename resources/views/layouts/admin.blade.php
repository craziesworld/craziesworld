<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="{{ mix('assets/admin/css/app.css') }}">

</head>
<body>
    <div id="app"></div>

    <!-- Scripts -->
    <script src="{{ mix('assets/admin/js/app.js') }}"></script>
</body>
</html>
