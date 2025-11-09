<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagaAir.ID</title>

    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gentium+Plus:ital,wght@0,400;0,700;1,400;1,700&family=Pontano+Sans&display=swap" rel="stylesheet">
    
    @yield('css') <!-- untuk CSS tambahan per halaman -->
</head>
<body>
    {{ $slot }}
    
    <script src="{{ asset('js/homepage.js') }}"></script>
    @yield('js') <!-- untuk js tambahan per halaman -->
</body>
</html>
