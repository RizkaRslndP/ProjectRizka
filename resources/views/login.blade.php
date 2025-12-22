<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>

<div class="min-h-screen flex items-center justify-center bg-white px-4">

    <div
        class="rounded-3xl bg-white
           grid grid-cols-1 lg:grid-cols-2
           overflow-hidden  border border-gray-200
           max-w-4xl w-full shadow-lg">

        <!-- WELCOME -->
        <div
            class="relative overflow-hidden
           flex flex-col justify-center
           px-6 py-10
           sm:px-10
           lg:px-12 lg:py-16
           bg-linear-to-br from-indigo-200 via-blue-50 to-sky-200">

            <!-- WATER BUBBLES -->
            <span class="water-bubble b1"></span>
            <span class="water-bubble b2"></span>
            <span class="water-bubble b3"></span>
            <span class="water-bubble b4"></span>

            <!-- CONTENT -->
            <div class="relative z-10">
                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">
                    Welcome to
                </h2>

                <h3 class="mt-2 text-xl sm:text-2xl font-semibold text-indigo-600">
                    Repository IAI AL-AZIZ
                </h3>

                <p class="mt-4 text-sm sm:text-base text-gray-600 leading-relaxed max-w-md">
                    Sistem repositori digital akademik modern
                    berbasis teknologi web terkini.
                </p>
            </div>
        </div>



        <!-- LOGIN -->
        <div
            class="px-6 py-10
               sm:px-10 sm:py-14
               lg:px-14 lg:py-16
               order-2">

            <!-- Logo -->
            <div class="text-center">
                <img src="{{ asset('assets/img/iai_alaziz.png') }}" alt="IAI AL-AZIZ"
                    class="mx-auto h-28 sm:h-32 w-auto" />

                <h2 class="mt-6 text-xl sm:text-2xl font-bold text-gray-800">
                    Sign in to your account
                </h2>
            </div>

            <!-- FORM -->
            <form action="#" method="POST" class="mt-8 space-y-6">
                <div>
                    <label class="block text-sm font-medium text-gray-700">
                        Email address
                    </label>
                    <input type="email" name="email" required
                        class="mt-2 block w-full rounded-md
                           border border-gray-300
                           px-3 py-2 text-sm
                           focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label class="block text-sm font-medium text-gray-700">
                            Password
                        </label>
                        <a href="#" class="text-sm text-indigo-500 hover:underline">
                            Forgot password?
                        </a>
                    </div>
                    <input type="password" name="password" required
                        class="mt-2 block w-full rounded-md
                           border border-gray-300
                           px-3 py-2 text-sm
                           focus:border-indigo-500 focus:ring-indigo-500">
                </div>

                <button type="submit"
                    class="w-full rounded-md
                       bg-indigo-600 py-2.5
                       text-sm font-semibold text-white
                       hover:bg-indigo-500 transition">
                    Sign in
                </button>
            </form>

            <p class="mt-6 text-center text-sm text-gray-500">
                Not a member?
                <span class="font-semibold text-indigo-600">
                    Call the admin
                </span>
            </p>
        </div>

    </div>

</div>



</html>
