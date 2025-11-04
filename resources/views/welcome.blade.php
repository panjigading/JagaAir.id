<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagaAir.id | Dashboard</title>
</head>
<body class="bg-gray-50 text-gray-800 flex min-h-screen">
    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Main content --}}
    <div class="flex-1 flex flex-col">
        {{-- Header --}}
        @include('components.header')

        {{-- Content --}}
        <main class="p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>