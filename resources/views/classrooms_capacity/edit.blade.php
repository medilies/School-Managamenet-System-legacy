<x-app-layout>

    <x-slot name="header">
        <div class="mr-4">
            {{ strtoupper($establishment_year->composed_key) }}
        </div>

        <a href="{{ route('establishment-years.show', ['establishment_year' => $establishment_year->composed_key]) }}"
            title="Voir les classes"
            class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">

            <x-icons.eye />
        </a>
    </x-slot>

    <form
        action={{ route('classrooms_capacity.update', ['establishment_year' => $establishment_year->composed_key]) }}
        method="post">

        @csrf
        <input type="hidden" name="first_classroom_id" value="{{ $classroomsByCycle['prescolaire']->first()->id }}">

        @foreach ($classroomsByCycle as $classrooms)
            <div class="mb-6 flex flex-wrap">
                @foreach ($classrooms as $classroom)

                    <div class="bg-white w-96 m-2 p-2 rounded-md shadow-inner flex justify-between items-center">

                        <label for="{{ $classroom->id }}"> {{ $classroom->classType->name }} </label>

                        <input type="number" min="0" name="{{ $classroom->id }}"
                            value="{{ old($classroom->id, $classroom->capacity) }}" class="w-24">

                    </div>
                @endforeach

            </div>
        @endforeach

        <x-forms.submit-btn> Mettre à jour</x-forms.submit-btn>

    </form>

</x-app-layout>
