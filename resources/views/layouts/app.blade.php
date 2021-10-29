<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Imports tailwind and contains general style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>Elhayat School</title>
</head>

<body>
    <div class="relative min-h-screen md:flex">

        <!-- mobile menu bar -->
        <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
            <!-- logo -->
            <a href="#" class="block p-4 text-white font-bold">Elhayat School</a>

            <!-- mobile menu button -->
            <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- sidebar -->
        <div
            class="sidebar bg-blue-800 text-blue-100 w-64 space-y-6 py-7 px-2 absolute inset-y-0 left-0 transform -translate-x-full md:relative md:translate-x-0 transition duration-200 ease-in-out">

            <!-- logo -->
            <a href="#" class="text-white flex items-center space-x-2 px-4">
                <span class="text-2xl font-extrabold">Elhayat School</span>
            </a>

            <!-- nav -->
            <nav>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    Acceuil
                </a>
                <a href="#" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-700 hover:text-white">
                    Dashboard
                </a>
            </nav>
        </div>

        <!-- content -->
        <div class="flex-1 p-10 text-2xl font-bold">

            @yield("content")

        </div>

    </div>

</body>
<script src="{{ asset('js/app.js') }}"></script>

</html>
