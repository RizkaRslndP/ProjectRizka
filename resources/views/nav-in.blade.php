<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> @vite('resources/css/app.css')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navbar in</title>
</head>

<body>
    <div x-data="{ sidebarOpen: false }" class="flex h-screen overflow-hidden"> <!-- SIDEBAR -->
        <aside :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
            class="fixed z-40 w-64 h-full bg-white border-gray-200 px-6 border-r transition-transform lg:translate-x-0 lg:static">
            <div class="h-16 px-6 py-4 border-b border-gray-200 flex items-center"> <img
                    src="{{ Vite::asset('resources/assets/Logo-IAI-AL-AZIS.png') }}" class="h-9 w-auto"
                    alt="IAI AL-AZIZ" /> </div>
            <nav class="p-4 space-y-4 text-sm">
                <p class="text-gray-400 uppercase text-xs">Orientation</p> <a
                    class="block text-gray-700 hover:text-indigo-600">Understanding Where You Are</a> <a
                    class="block text-gray-700 hover:text-indigo-600">Landscape of Choice</a>
                <p class="text-gray-400 uppercase text-xs mt-6">Direction</p> <a
                    class="block text-gray-700 hover:text-indigo-600">Mapping Factors</a> <a
                    class="block text-gray-700 hover:text-indigo-600">Overcoming Paralysis</a>
            </nav>
        </aside> <!-- CONTENT -->
        <div class="flex flex-col flex-1 overflow-hidden"> <!-- TOPBAR -->
            <header class="h-16 bg-white border-b border-gray-200 flex items-center px-6"> <button
                    @click="sidebarOpen = !sidebarOpen" class="lg:hidden"> ☰ </button>
                <div class="absolute right-4 flex items-center gap-4"> <span class="text-sm text-gray-500">Compass /
                        Overview</span> <!-- PROFILE -->
                    <div x-data="{ open: false }" class="relative"> <img @click="open = !open"
                            src="{{ Vite::asset('resources/assets/profil.png') }}"
                            class="h-8 w-8 rounded-full cursor-pointer "> <!-- DROPDOWN -->
                        <div x-show="open" @click.outside="open = false"
                            class="absolute right-0 mt-2 w-40 bg-white rounded shadow"> <a href="/edit-profil"
                                class="block px-4 py-2 text-sm hover:bg-gray-100">Profile</a>
                            <form method="POST" action="/login"> @csrf <a href="/login"
                                    class="w-full text-left px-4 py-2 text-sm hover:bg-gray-100"> Logout</a> </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
</body>
</html>