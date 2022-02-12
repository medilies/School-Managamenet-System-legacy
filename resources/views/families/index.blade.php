<x-app-layout>

    <x-slot name="header">
        {{ __("L'index des familles") }}

        <a href="{{ route('families.create') }}" title="Ajouter une nouvelle famille"
            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

            <x-icons.plus />
        </a>

    </x-slot>

    <table class="border-2 m-4">

        <tr>
            <th class="border p-1"> Family ID </th>
            <th class="border p-1"> Pere </th>
            <th class="border p-1"> Mere </th>
            <th class="border p-1"> Nombre D'étudiants </th>
            <th></th>
        </tr>

        @foreach ($families as $family)
            @php
                $father = $family->clients->firstWhere('family_title', 'father');
                $mother = $family->clients->firstWhere('family_title', 'mother');
            @endphp

            <tr>
                <td class="border p-1"> {{ $family->id }} </td>

                @isset($father)
                    <td class="border p-1"> {{ $father->full_name }} </td>
                @else
                    <td></td>
                @endisset

                @isset($mother)
                    <td class="border p-1"> {{ $mother->full_name }} </td>
                @else
                    <td></td>
                @endisset

                <td class="border p-1"> {{ $family->students_count }} </td>
                <td class="border p-1">
                    <a href="{{ route('families.show', ['family' => $family->id]) }}" class="text-indigo-600">
                        Voir </a>
                </td>

            </tr>
        @endforeach

    </table>

    {{ $families->links() }}

</x-app-layout>
