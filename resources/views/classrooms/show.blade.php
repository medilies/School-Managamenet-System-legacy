<x-app-layout>

    <x-slot:header>
        {{ strtoupper($establishment_year->composed_key) }} - {{ $class_type }}
    </x-slot:header>

    <p>
        <a href="{{ route('establishment-years.show', ['establishment_year' => "$establishment_year->composed_key"]) }}"
            class="text-indigo-600 hover:text-indigo-900 flex">
            <x-icons.arrow-left />
            {{ strtoupper($establishment_year->composed_key) }}
        </a>
    </p>

    <h3> Classe numéro {{ $classroom->id }}</h3>

    <h4> Capacité {{ $registrations->count() }}/{{ $classroom->capacity }} </h4>

    <table class="border-2 m-4">

        <tr>
            <th class="border p-1"> étudient </th>
            <th></th>
        </tr>

        @foreach ($registrations as $registration)
            <tr>
                <td class="border p-1"> {{ $registration->student->full_name }} </td>

                <td class="border p-1">
                    <a href="#" class="text-indigo-600 hover:text-indigo-900"> Modifier </a>
                </td>

            </tr>
        @endforeach

    </table>

</x-app-layout>
