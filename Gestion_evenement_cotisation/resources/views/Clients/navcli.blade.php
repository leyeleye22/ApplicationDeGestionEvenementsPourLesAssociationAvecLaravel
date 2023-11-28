<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <title>Document</title>
</head>

<body>


    <div class="antialiased bg-black-100 light-mode:bg-gray-900">
        <div class="w-full text-white bg-black dark-mode:text-white-200 light-mode:bg-gray-800">
            <div x-data="{ open: true }"
                class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                <div class="flex flex-row items-center justify-between p-4">
                    <a href="#"
                        class="text-lg font-semibold tracking-widest text-white uppercase rounded-lg light-mode:text-white focus:outline-none focus:shadow-outline bg-white-500 hover:bg-white-700 font-bold py-2 px-4">
                        Flowtrail UI
                    </a>

                    <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                        <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                            <path x-show="!open" fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                            <path x-show="open" fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg light-mode:bg-transparent light-mode:hover:bg-white-600 light-mode:focus:bg-white-600 dark-mode:focus:text-white dark-mode:hover:text-white light-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-white hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="#">Acceuil</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg light-mode:bg-transparent light-mode:hover:bg-white-600 light-mode:focus:bg-white-600 dark-mode:focus:text-white dark-mode:hover:text-white light-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-white hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/client/events">Evenement</a>
                    <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg light-mode:bg-transparent light-mode:hover:bg-white-600 light-mode:focus:bg-white-600 dark-mode:focus:text-white dark-mode:hover:text-white light-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-white hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                        href="/client/contact">Contact</a>

                </nav>

                <a href="">
                    <img class="w-12 h-12 rounded-full" src="{{ asset('images/202311271414LOGO.jpg') }}"
                        alt="Profile Picture">
                </a>
                <a class="px-4 py-2 mt-2 text-sm font-semibold bg-red-500 text-white rounded-lg light-mode:bg-transparent light-mode:hover:bg-white-600 light-mode:focus:bg-white-600 dark-mode:focus:text-white dark-mode:hover:text-white light-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-white hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                    href="{{ route('logout') }}">Log Out</a>
            </div>
        </div>
    </div>


    @yield('nav')
    @yield('section')
    @yield('section2')
    @yield('final')
    @yield('footer')
</body>

</html>
