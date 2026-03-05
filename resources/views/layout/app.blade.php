<!DOCTYPE html>
<html>
<head>
    <title>Tienda TechStore</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('layout.navbar')

    @yield('content')

    @include('layout.footer')

</body>
</html>