<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagaAir.ID</title>

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    
    @yield('css') <!-- untuk CSS tambahan per halaman -->
</head>
<body>
    {{ $slot }}
    
    <script src="{{ asset('js/homepage.js') }}"></script>
    @yield('js') <!-- untuk js tambahan per halaman -->
</body>
</html>
