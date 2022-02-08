<x-app-layout>

    <x-slot name="header">
        {{ __('Ajouté la nouvelle année scolaire') }}
    </x-slot>

    <h3 class="mb-8"> {{ $year->establishment_id }} {{ $year->year }} </h3>

    <form action={{ route('classrooms_capacity.update', ['year' => $year->id]) }} method="post">

        @csrf
        <input type="hidden" name="first_classroom_id" value="{{ $classroomsByCycle['préscolaire']->first()->id }}">

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
