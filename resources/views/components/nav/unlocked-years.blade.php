<x-nav.simple-anchor>
    <x-icons.chevron-down />
    <x-slot name="label"> Années scolaires Actifs...</x-slot>
</x-nav.simple-anchor>

<div class="flex p-2">

    <div class="bg-white w-1 ml-3 mr-2 rounded-lg"></div>

    <div class="flex-1">

        @foreach ($unlocked_years as $year)

            <x-nav.simple-anchor href="{{ route('years.show', ['year' => $year->id]) }}">
                <x-icons.calendar />
                <x-slot name="label"> {{ $year->year }} {{ $year->establishment_id }} </x-slot>
            </x-nav.simple-anchor>

        @endforeach

    </div>

</div>
