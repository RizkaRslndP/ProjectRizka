<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <div class="bg-white w-full min-h-screen">
        <div class="relative isolate px-6 pt-14 lg:px-8">
            {{-- <div aria-hidden="true"
                class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
                <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                    class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                    <div
                        class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
                        Announcing our next round of funding. <a href="#"
                            class="font-semibold text-indigo-400"><span aria-hidden="true"
                                class="absolute inset-0"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-5xl font-semibold tracking-tight text-balance text-white sm:text-7xl">Data to enrich
                        your online business</h1>
                    <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">Anim aute id magna aliqua
                        ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam
                        occaecat.</p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="#"
                            class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Get
                            started</a>
                        <a href="#" class="text-sm/6 font-semibold text-white">Learn more <span
                                aria-hidden="true">→</span></a>
                    </div>
                </div>
            </div> --}}

            <!-- Login -->
            <div class="min-h-screen flex items-center justify-center bg-white px-4">

                <!-- Login Card -->
                <div
                    class="w-full max-w-md rounded-2xl
                border border-gray-200
                shadow-lg
                bg-[linear-gradient(45deg,#8ec5fc_0%,#8dd3ff_25%,#a1d8ff_50%,#c1d2ff_75%,#e0c3ff_100%)]
                p-1">

                    <!-- Inner white box -->
                    <div class="rounded-2xl bg-white px-20 py-28 shadow-sm">

                        <!-- Logo -->
                        <div class="text-center">
                            <img src="{{ asset('assets/img/iai_alaziz.png') }}" alt="IAI AL-AZIZ"
                                class="mx-auto h-40 w-auto" />

                            <h2 class="mt-6 text-2xl font-bold tracking-tight text-gray-800">
                                Sign in to your account
                            </h2>
                        </div>

                        <!-- FORM (punyamu tetap) -->
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
                           bg-indigo-600 py-2
                           text-sm font-semibold text-white
                           hover:bg-indigo-500 transition">
                                Sign in
                            </button>
                        </form>

                        <p class="mt-6 text-center text-sm text-gray-500">
                            Not a member?
                            <span class="font-semibold text-indigo-600">Call the admin</span>
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
