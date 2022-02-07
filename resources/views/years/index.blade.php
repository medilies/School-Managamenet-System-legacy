<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouté la nouvelle année scolaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">


                    @foreach ($years as $year_name => $year)

                        <h3> {{ $year_name }} </h3>

                        <table class="border-2 m-4">

                            <tr>
                                <td class="border p-1"> Année </td>
                                <td class="border p-1"> établissement </td>
                                <td class="border p-1"> locked </td>
                                <td class="border p-1"></td>
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

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
