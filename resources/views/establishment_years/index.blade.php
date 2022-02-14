<x-app-layout>

    <x-slot:header>
        {{ __("L'index des années scolaires") }}

        {{-- <a href="{{ route('establishment-years.create') }}"
            title="Ajouter une nouvelle année scolaire pour un établissement"
            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

            <x-icons.plus />
        </a> --}}
    </x-slot:header>

    @foreach ($yearsByyear as $key_year => $years)
        <div class="mt-8 mb-2 flex items-center">
            <h2 class="text-green-700 text-2xl font-bold"> {{ $key_year }} </h2>
            <p class="text-sm text-gray-400">{{ $years->first()->year->state }}</p>
            <div class="bg-green-700 h-1 m-4 flex-1 rounded-lg"></div>
        </div>

        <div class="flex flex-wrap">
            @foreach ($years as $year)
                <x-cards.year establishment="{{ $year->establishment_id }}"
                    composed-key="{{ $year->composed_key }}" />
            @endforeach
        </div>
    @endforeach


</x-app-layout>
