<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Website' }}</title>
</head>
<body class="bg-gray-900 text-gray-100">

    {{-- Navbar --}}
    @include('nav')

    {{-- Halaman Konten --}}
    <main class="py-6 px-4">
        @yield('content')
    </main>

</body>
</html>