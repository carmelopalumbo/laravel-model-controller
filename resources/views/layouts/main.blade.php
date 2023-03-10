<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="favicon.png">

    <!-- Styles -->
    @vite('resources/js/app.js')

    <title>SUPERMOVIES | @yield('title')</title>
</head>

<body>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

</body>

</html>
