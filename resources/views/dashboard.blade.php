<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @include('nav-in')
    @extends('footer')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body class="bg-gray-100">

    <!-- MAIN -->
    <main class="flex-1 flex flex-col">

        <!-- HERO -->
        <div class="bg-white rounded-xl p-6 shadow mb-6 flex gap-6">
            <img src="{{ asset('course.jpg') }}" class="w-56 rounded-lg hidden md:block">
            <div>
                <h1 class="text-2xl font-semibold">Compass</h1>
                <p class="text-gray-600 mt-2">
                    A comprehensive journey that helps you navigate uncertainty.
                </p>

                <div class="flex gap-4 mt-4 text-sm text-gray-500">
                    <span>📘 4 modules</span>
                    <span>🎬 20 lessons</span>
                    <span>⏱ 3 hr 43 min</span>
                </div>

                <button class="mt-4 px-4 py-2 bg-black text-white rounded">
                    Start the course
                </button>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="bg-white rounded-xl p-9 shadow">
            <h2 class="font-semibold text-lg mb-4">
                Orientation: Understanding Where You Are
            </h2>

            <ul class="space-y-3 text-sm">
                <li class="flex justify-between">
                    <span>The Landscape of Choice</span>
                    <span class="text-gray-400">14:36</span>
                </li>
                <li class="flex justify-between">
                    <span>The Paradox of Agency</span>
                    <span class="text-gray-400">15:47</span>
                </li>
            </ul>
        </div>
    </main>
    </div>
    </div>
</body>

</html>
