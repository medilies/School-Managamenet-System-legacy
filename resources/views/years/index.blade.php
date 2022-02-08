<x-app-layout>

    <x-slot name="header">
        {{ __('Les années scolaires') }}
    </x-slot>

    @foreach ($years as $year_name => $year)

        <h3> {{ $year_name }} </h3>

        <table class="border-2 m-4">

            <tr>
                <th class="border p-1"> Année </th>
                <th class="border p-1"> établissement </th>
                <th class="border p-1"> locked </th>
                <th class="border p-1"></th>
            </tr>

            @foreach ($year as $establishment_year)

                <tr>
                    <td class="border p-1">{{ $establishment_year->year->year }}</td>
                    <td class="border p-1">{{ $establishment_year->year->establishment_id }}</td>
                    <td class="border p-1">{{ $establishment_year->year->locked }}</td>
                    <td class="border p-1">

                        <a href="{{ route('years.show', ['year' => $establishment_year->year->id]) }}"
                            class="text-indigo-600 hover:text-indigo-900">
                            Voir </a>

                        -

                        {{-- equal to current working year condition to show --}}
                        <a href="{{ route('classrooms_capacity.edit', ['year' => $establishment_year->year->id]) }}"
                            class="text-indigo-600 hover:text-indigo-900">
                            modifier </a>

                    </td>
                </tr>

            @endforeach

        </table>

    @endforeach

</x-app-layout>
