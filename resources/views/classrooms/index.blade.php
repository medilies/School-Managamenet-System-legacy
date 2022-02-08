<x-app-layout>

    <x-slot name="header">
        {{ __('Les classes') }}
    </x-slot>

    <div class="flex flex-wrap">

        @foreach ($establishment_classes as $year)
            @foreach ($year as $establishment)

                <div>

                    <h3> {{ $establishment[0]->year->year }}
                        {{ $establishment[0]->year->establishment_id }} </h3>

                    <table class="border-2 m-4">

                        <tr>
                            <th class="border p-1">cycle</th>
                            <th class="border p-1">classe</th>
                            <th class="border p-1">capacité</th>
                        </tr>

                        @foreach ($establishment as $classroom)

                            <tr>
                                <td class="border p-1">{{ $classroom->classType->cycle_id }}</td>
                                <td class="border p-1">{{ $classroom->classType->name }}</td>
                                <td class="border p-1">{{ $classroom->capacity }}</td>
                            </tr>

                        @endforeach

                    </table>

                </div>

            @endforeach
        @endforeach

    </div>

</x-app-layout>
