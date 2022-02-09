<x-app-layout>

    <x-slot name="header">
        {{ strtoupper($establishment_year->establishment_id) }} {{ $establishment_year->year_id }}
    </x-slot>

    <form action={{ route('classrooms_capacity.update', ['establishment_year' => $establishment_year->id]) }}
        method="post">

        @csrf
        <input type="hidden" name="first_classroom_id" value="{{ $classroomsByCycle['prescolaire']->first()->id }}">

        @foreach ($classroomsByCycle as $classrooms)
            <div class="mb-6 flex flex-wrap">
                @foreach ($classrooms as $classroom)

                    <div class="w-2/5 flex justify-between">
                        <label for="{{ $classroom->id }}"> {{ $classroom->classType->name }} </label>

                        <input type="number" min="0" name="{{ $classroom->id }}"
                            value="{{ old($classroom->id, $classroom->capacity) }}" class="w-24">
                        <br>
                    </div>

                @endforeach

            </div>
        @endforeach

        <x-forms.submit-btn> Mettre à jour</x-forms.submit-btn>

    </form>

</x-app-layout>
