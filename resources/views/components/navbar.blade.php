 <nav
     class="sticky top-0 z-50 bg-[linear-gradient(to_right,#77A1D3)] after:pointer-events-none after:absolute after:inset-x-0 after:bottom-0 after:h-px after:bg-white/10">
     <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
         <div class="relative flex h-20 items-center justify-between">
             <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                 <!-- Mobile menu button-->
                 <button type="button" command="--toggle" commandfor="mobile-menu"
                     class="relative inline-flex items-center justify-center rounded-md p-2 text-white hover:bg-white/25 hover:text-white">
                     <span class="absolute -inset-0.5"></span>
                     <span class="sr-only">Open main menu</span>
                     <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                         aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                         <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                             stroke-linejoin="round" />
                     </svg>
                     <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon"
                         aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                         <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                     </svg>
                 </button>
             </div>
             <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                 <div class="flex shrink-0 items-center">
                     <img src="{{ asset('assets/img/iai_alaziz.png') }}" alt="IAI-AL-AZIZ" class="h-12 w-auto" />
                 </div>
                 <div class="hidden sm:ml-8 sm:block">
                     <div class="flex space-x-4">
                         <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                         <x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link>
                         <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                         <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                     </div>
                 </div>
             </div>
             <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">

                 <!-- Profile dropdown -->
                 <el-dropdown class="relative ml-60">
                     <button
                         class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 bg-[linear-gradient(to_right,#77A1D3)]focus-visible:outline-indigo-500">
                         <span class="absolute -inset-1.5 "></span>
                         <span class="sr-only">Open user menu</span>
                         <img src="{{ asset('assets/img/user.png') }}" alt="Profile"
                             class="size-8 rounded-full bg-[#77A1D3] outline outline-offset-1 outline-white/10 h-10 w-auto hover:bg-white/5 hover:text-white" />
                     </button>

                     <el-menu anchor="bottom end" modal="false" trap-focus
                         class="w-48 origin-top-right rounded-md bg-gray-800 py-1 outline -outline-offset-1 outline-white/10 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                         <a href="/edit-profil"
                             class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Your
                             profile</a>
                         <a href="/edit-profil"
                             class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Settings</a>
                         <a href="/login"
                             class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-hidden">Sign
                             out</a>
                     </el-menu>
                 </el-dropdown>
             </div>
         </div>
     </div>

     <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
         <div class="space-y-1 px-2 pt-2 pb-3">
             <x-nav-link href="/" :active="request()->is('/')" mobile>
                 Home Page
             </x-nav-link>
             <x-nav-link href="/posts" :active="request()->is('posts')" mobile>
                 Blog
             </x-nav-link>
             <x-nav-link href="/about" :active="request()->is('about')" mobile>
                 About
             </x-nav-link>
             <x-nav-link href="/contact" :active="request()->is('contact')" mobile>
                 Contact
             </x-nav-link>
         </div>
     </el-disclosure>
 </nav>
