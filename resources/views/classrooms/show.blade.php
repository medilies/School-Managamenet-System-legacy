<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouté la nouvelle année scolaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 ">

                    <p>
                        <a href="{{ route('years.show', ['year' => $year->id]) }}"
                            class="text-indigo-600 hover:text-indigo-900">
                            <- {{ $year->establishment_id }} {{ $year->year }} </a>
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
                                    <a href="" class="text-indigo-600 hover:text-indigo-900"> Modifier </a>
                                </td>
                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
