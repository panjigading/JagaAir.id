<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .bg-pattern {
            background: linear-gradient(135deg, #0097A7, #00BCD4, #009688);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        .wave {
            position: absolute;
            width: 100%;
            height: 100%;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%2300bcd4' fill-opacity='0.3' d='M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,165.3C672,149,768,139,864,144C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E") repeat-x bottom;
        }
        .wave:nth-child(2) {
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%230097a7' fill-opacity='0.2' d='M0,160L48,170.7C96,181,192,203,288,202.7C384,203,480,181,576,165.3C672,149,768,139,864,144C960,149,1056,171,1152,181.3C1248,192,1344,192,1392,192L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z'%3E%3C/path%3E%3C/svg%3E") repeat-x top;
            transform: scaleY(-1);
        }
    </style>
</head>
<body class="font-sans antialiased">

    <!-- Background Pattern -->
    <div class="bg-pattern">
        <div class="wave"></div>
        <div class="wave"></div>
    </div>

    <!-- Signup Card -->
    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="max-w-md w-full bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-2xl font-bold text-center text-gray-800 mb-2">Create Account</h2>
            <p class="text-sm text-gray-500 text-center mb-6">Fill in the details below to get started</p>

            <form method="POST" action="">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-1">Nama Lengkap</label>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror"
                        required
                    >
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror"
                        required
                        autocomplete="email"
                    >
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="nik" class="block text-gray-700 text-sm font-medium mb-1">NIK</label>
                    <input
                        type="text"
                        id="nik"
                        name="nik"
                        value="{{ old('nik') }}"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('nik') border-red-500 @enderror"
                        required
                    >
                    @error('nik')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-1">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror"
                        required
                        autocomplete="new-password"
                    >
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-1">Konfirmasi Password</label>
                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="w-full px-4 py-2 bg-gray-100 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                        required
                        autocomplete="new-password"
                    >
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition duration-200">
                    Sign Up
                </button>
            </form>

            <p class="text-center text-gray-600 text-sm mt-4">
                Already have an account? <a href="{{ route('sign_in') }}" class="text-blue-600 hover:text-blue-800 font-medium">Sign In</a>
            </p>
        </div>
    </div>

</body>
</html>