<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">

    <div class="flex h-screen">

        <aside class="bg-blue-900 h-screen w-72 p-4 shadow-md relative">

            {{-- LOGO --}}
            <div class="m-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path d="M12 14l9-5-9-5-9 5 9 5z" />
                    <path
                        d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                </svg>
            </div>

            <nav class="overflow-auto max-h-80%">

                <x-nav.simple-anchor href="{{ route('home') }}">
                    <x-icons.home />
                    <x-slot name="label"> Acceuil </x-slot>
                </x-nav.simple-anchor>

                <x-nav.simple-anchor href="{{ route('dashboard') }}">
                    <x-icons.view-grid />
                    <x-slot name="label"> Dashboard </x-slot>
                </x-nav.simple-anchor>

                <x-nav.simple-anchor href="{{ route('establishments.index') }}">
                    <x-icons.office-building />
                    <x-slot name="label"> Etablisments </x-slot>
                </x-nav.simple-anchor>

                <x-nav.simple-anchor href="{{ route('establishment-years.index') }}">
                    <x-icons.calendar />
                    <x-slot name="label"> Années scolaires </x-slot>
                </x-nav.simple-anchor>

                <x-nav.active-years />

                <x-nav.simple-anchor href="{{ route('families.index') }}">
                    <x-icons.user-group />
                    <x-slot name="label"> Les familles </x-slot>
                </x-nav.simple-anchor>

                <x-nav.simple-anchor href="{{ route('students.index') }}">
                    <x-icons.user />
                    <x-slot name="label"> Les étudiants </x-slot>
                </x-nav.simple-anchor>

                <x-nav.simple-anchor href="{{ route('clients.index') }}">
                    <x-icons.users />
                    <x-slot name="label"> Les parents </x-slot>
                </x-nav.simple-anchor>

            </nav>

            <div
                class="absolute bg-gray-800 text-white bottom-0 left-0 w-full h-16 py-2 px-4 rounded-t-3xl flex items-center justify-between">

                <div class="flex items-center cursor-pointer">
                    <x-icons.user-circle />
                    <div class="ml-2">
                        <div class="text-sm"> {{ Auth::user()->name }} </div>
                        <div class="text-xs"> {{ Auth::user()->email }} </div>
                    </div>
                </div>

                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="cursor-pointer">
                            <x-icons.logout />
                        </button>
                    </form>
                </div>

            </div>
        </aside>

        {{-- Page Content --}}
        <div id="main" class="bg-white flex-1 max-h-full overflow-auto ">

            <header class="bg-white shadow">
                <div class="py-6 px-4">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center">
                        {{ $header }}
                    </h2>
                </div>
            </header>

            <main class="py-8 px-6">
                <div class="w-full mx-auto px-6">
                    <div class="bg-blue-50 p-6 overflow-hidden shadow-md sm:rounded-lg">
                        {{ $slot }}
                    </div>
                </div>
            </main>

        </div>

    </div>
</body>

</html>
