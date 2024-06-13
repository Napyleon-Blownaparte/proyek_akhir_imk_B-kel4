<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Petravel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    @vite('resources/css/app.css')
    <script src="https://kit.fontawesome.com/b0647635f2.js" crossorigin="anonymous"></script>


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>




</head>
<body class="font-sans">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <p class=" font-semibold my-0">Petravel</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item bg-sky-700 rounded px-4 mx-3 hover:bg-sky-600 transition active:bg-sky-950 flex align-middle">
                                    <a class="nav-link text-white translate-y-[0.1em]" href="{{ '/login#bruh' }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item border-sky-700 border-3 px-3 rounded hover:bg-sky-100 transition active:bg-sky-700">
                                    <a class="nav-link" href="{{ '/register#bruh' }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item bg-sky-700 rounded px-3 mx-6 hover:bg-sky-600 transition active:bg-sky-950">
                            <a class="nav-link text-white" href="/history">Lihat Reservasi</a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="min-h-[100vh]">
            @yield('content')
        </main>
        <footer class="bg-sky-950 text-white">
            <div class="container mx-auto py-12 px-4">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <div class="col-span-1 flex items-center">
                        <h1 class="text-3xl font-bold">Petravel</h1>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <h3 class="text-xl font-semibold">Ikuti Kami</h3>
                            <ul class="list-none mt-1 translate-x-[-1em]">
                                <li class="flex items-center my-4">
                                    <i class="fab fa-instagram mr-2 text-lg"></i>
                                    <p class="text-lg my-0">Instagram</p>
                                </li>
                                <li class="flex items-center my-4">
                                    <i class="fab fa-whatsapp mr-2 text-lg"></i>
                                    <p class="text-lg my-0">Whatsapp</p>
                                </li>
                                <li class="flex items-center my-4">
                                    <i class="fab fa-facebook mr-2 text-lg"></i>
                                    <p class="text-lg my-0">Facebook</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <h3 class="text-xl font-semibold">Kontak Kami</h3>
                            <p class="mt-4">Email: info@petravel.com<br>Phone: 123-456-7890</p>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div>
                            <h3 class="text-xl font-semibold">Alamat</h3>
                            <p class="mt-4">Jl. Lorem Ipsum No. 123<br>Kota Anda, Negara Anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>




    </div>
</body>
</html>
