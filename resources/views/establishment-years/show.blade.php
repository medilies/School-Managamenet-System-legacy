<x-app-layout>

    <x-slot name="header">
        {{ $establishment_year->year_id }} {{ strtoupper($establishment_year->establishment_id) }}
    </x-slot>

    <table class="border-2 m-4">

        <tr>
            <th class="border p-1"> Classe </th>
            <th class="border p-1"> Inscriptions </th>
            <th class="border p-1"> Capacité </th>
            <th></th>
        </tr>

        @foreach ($classrooms as $classroom)

            @if ($classroom->capacity === 0) @php continue; @endphp @endif

            <tr>
                <td class="border p-1"> {{ $classroom->classType->name }} </td>
                <td class="border p-1"> {{ $classroom->student_registrations_count }} </td>
                <td class="border p-1"> {{ $classroom->capacity }} </td>
                <td class="border p-1">
                    <a href="{{ route('classrooms.show', ['classroom' => $classroom->id]) }}"
                        class="text-indigo-600 hover:text-indigo-900"> voir </a>
                </td>
            </tr>
        @endforeach

    </table>

</x-app-layout>
