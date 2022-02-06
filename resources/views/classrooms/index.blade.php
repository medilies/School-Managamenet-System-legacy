<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Les classes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-screen-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">

                    <div class="flex flex-wrap">

                        @foreach ($establishment_classes as $year)
                            @foreach ($year as $establishment)

                                <div class="w-1/3 ">

                                    <h3> {{ $establishment[0]->year->year }}
                                        {{ $establishment[0]->year->establishment_id }} </h3>

                                    <table class="border-2 m-4">

                                        <tr>
                                            <td class="border p-1">cycle</td>
                                            <td class="border p-1">classe</td>
                                            <td class="border p-1">capacité</td>
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
                </div>
            </div>
        </div>

</x-app-layout>
