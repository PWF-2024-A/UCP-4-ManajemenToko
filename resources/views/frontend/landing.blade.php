<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Gudang</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Muli:200,300,400,500,600,700,800,900&display=swap" />
</head>

<body class="font-sans bg-gray-800">
    <nav
        class="container flex flex-col items-center justify-between w-full px-4 py-3 mx-auto bg-gray-900 md:flex-row md:px-8">
        <div class="flex items-center justify-between w-full md:w-auto">
            <a href="#" class="flex items-center p-1">
                <img src="{{ asset('frontend/assets/images/store.png') }}" alt="Store Logo"
                    class="w-12 h-12 md:w-16 md:h-16">
                <span class="ml-2 text-lg font-bold text-white md:ml-4 md:text-xl">Manajemen Toko</span>
            </a>
            <button data-toggle="toggle-nav" data-target="#nav-items" class="text-white md:hidden">
                <i data-feather="menu"></i>
            </button>
        </div>
        <div id="nav-items" class="flex-col items-center hidden mt-2 md:flex md:flex-row md:ml-auto md:mt-0">
            <a href="#home"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">Home</a>
            <a href="#features"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">Features</a>
            <a href="{{ route('dashboard') }}"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">Dashboard</a>
            <a href="{{ url('about') }}"
                class="px-3 py-1 text-sm text-white md:text-xs lg:text-sm md:px-4 md:py-2 hover:underline">About Us</a>
            @if (Route::has('login'))
                <div class="flex items-center mt-2 md:mt-0">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="px-3 py-1 mx-1 text-sm font-semibold text-gray-600 bg-white rounded md:text-xs lg:text-sm md:px-4 md:py-2 md:mx-2 hover:text-gray-900 focus:outline-none">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-3 py-1 mx-1 text-sm font-semibold text-gray-600 bg-white rounded md:text-xs lg:text-sm md:px-4 md:py-2 md:mx-2 hover:text-gray-900 focus:outline-none">Log
                            in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-3 py-1 mx-1 text-sm font-semibold text-gray-600 bg-white rounded md:text-xs lg:text-sm md:px-4 md:py-2 md:mx-2 hover:text-gray-900 focus:outline-none">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>

    <!-- hero section -->
    <section id="home" class="flex items-center justify-center min-h-screen bg-gray-800">
        <div class="mx-5 text-center">
            <h1 class="text-4xl font-extrabold leading-tight text-gray-100 md:text-6xl">Selamat Datang<br />Website Toko
            </h1>
        </div>
    </section>

    <!-- features -->
    <section id="features" class="py-20 bg-gray-700">
        <div class="container flex flex-wrap mx-auto">
            <div class="w-full px-4 py-6 md:w-1/3">
                <div class="flex flex-col justify-between h-full p-6 bg-gray-800 rounded-lg shadow-lg">
                    <div>
                        <h4 class="mb-4 text-xl font-semibold text-gray-100">Product</h4>
                        <p class="mb-4 text-gray-300">Disini anda bisa melihat pilihan product yang sudah kami sediakan
                        </p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('todo.index') }}"
                            class="inline-block px-4 py-2 text-sm text-white transition duration-300 bg-gray-600 rounded hover:bg-gray-500">Read</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 py-6 md:w-1/3">
                <div class="flex flex-col justify-between h-full p-6 bg-gray-800 rounded-lg shadow-lg">
                    <div>
                        <h4 class="mb-4 text-xl font-semibold text-gray-100">Total</h4>
                        <p class="mb-4 text-gray-300">Anda dapat melihat total barang yang telah disediakan</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('total.index') }}"
                            class="inline-block px-4 py-2 text-sm text-white transition duration-300 bg-gray-600 rounded hover:bg-gray-500">Read</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 py-6 md:w-1/3">
                <div class="flex flex-col justify-between h-full p-6 bg-gray-800 rounded-lg shadow-lg">
                    <div>
                        <h4 class="mb-4 text-xl font-semibold text-gray-100">Category</h4>
                        <p class="mb-4 text-gray-300">Dapatkan kategory yang anda inginkan</p>
                    </div>
                    <div class="mt-4">
                        <a href="{{ route('category.index') }}"
                            class="inline-block px-4 py-2 text-sm text-white transition duration-300 bg-gray-600 rounded hover:bg-gray-500">Read</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
