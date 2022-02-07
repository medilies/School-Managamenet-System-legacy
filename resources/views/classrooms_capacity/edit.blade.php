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

                    <h3> {{ $year->establishment_id }} {{ $year->year }} </h3>

                    <form action={{ route('classrooms_capacity.update', ['year' => $year->id]) }} method="post"
                        class="w-full  border-2 p-4 ">

                        @csrf
                        <input type="hidden" name="first_classroom_id" value="{{ $classrooms->first()->id }}">

                        @foreach ($classrooms as $classroom)

                            <label for="{{ $classroom->id }}"> {{ $classroom->classType->name }} </label>

                            <input type="number" min="0" name="{{ $classroom->id }}"
                                value="{{ old($classroom->id, $classroom->capacity) }}">
                            <br>

                        @endforeach

                        <x-forms.submit-btn> Mettre à jour</x-forms.submit-btn>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
