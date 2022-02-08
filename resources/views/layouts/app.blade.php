@php
\Debugbar::disable();
@endphp

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

        {{-- fixed left-0 top-0 ? --}}
        <div class="bg-blue-900 h-screen w-72 p-4 shadow-md relative">

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

                {{-- 1 --}}
                <x-nav.simple-anchor href="#">
                    <x-icons.home />
                    <x-slot name="label"> Acceuil </x-slot>
                </x-nav.simple-anchor>

                {{-- 2 --}}
                <x-nav.simple-anchor href="#">
                    <x-icons.view-grid />
                    <x-slot name="label"> Dashboard </x-slot>
                </x-nav.simple-anchor>

                {{-- 3 --}}
                <x-nav.simple-anchor href="{{ route('establishments.index') }}">
                    <x-icons.office-building />
                    <x-slot name="label"> Etablisments </x-slot>
                </x-nav.simple-anchor>

                {{-- 4 --}}
                <x-nav.simple-anchor href="{{ route('years.index') }}">
                    <x-icons.calendar />
                    <x-slot name="label"> Année scolaires </x-slot>
                </x-nav.simple-anchor>

                {{-- 5 --}}
                <x-nav.unlocked-years />

                {{-- 6 --}}
                <x-nav.simple-anchor href="{{ route('families.index') }}">
                    <x-icons.user-group />
                    <x-slot name="label"> Les familles </x-slot>
                </x-nav.simple-anchor>

                {{-- 7 --}}
                <x-nav.simple-anchor href="{{ route('students.index') }}">
                    <x-icons.user />
                    <x-slot name="label"> Les étudiants </x-slot>
                </x-nav.simple-anchor>

                {{-- 8 --}}
                <x-nav.simple-anchor href="{{ route('clients.index') }}">
                    <x-icons.users />
                    <x-slot name="label"> Les parents </x-slot>
                </x-nav.simple-anchor>

            </nav>

            <div
                class="absolute bg-gray-800 text-white bottom-0 left-0 w-full h-16 py-2 px-4 rounded-t-3xl flex items-center justify-between">

                <div> {{ Auth::user()->name }} </div>

                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="cursor-pointer">
                            <x-icons.logout />
                        </button>
                    </form>
                </div>

            </div>

        </div>

        <!-- Page Content -->
        <main class="flex-1 max-h-full overflow-auto">

            <header class="bg-white shadow">
                <div class="py-6 px-4">
                    {{ $header }}
                </div>
            </header>

            {{ $slot }}
        </main>

    </div>
</body>

</html>
