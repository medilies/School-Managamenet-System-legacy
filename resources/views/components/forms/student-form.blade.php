<div class="flex flex-wrap mx-3 mb-6 ">

    <h3 class="w-full"> {{ $form_heading }} </h3>

    <x-forms.input name="fname" type="text">
        <x-slot name="label_text"> Prénom </x-slot>
    </x-forms.input>

    <x-forms.input name="lname" type="text">
        <x-slot name="label_text"> Nom </x-slot>
    </x-forms.input>

    <x-forms.input name="ar_fname" type="text">
        <x-slot name="label_text"> الاسم </x-slot>
    </x-forms.input>

    <x-forms.input name="ar_lname" type="text">
        <x-slot name="label_text"> اللقب </x-slot>
    </x-forms.input>

    <x-forms.input name="bday" type="date">
        <x-slot name="label_text"> Date de naissance </x-slot>
    </x-forms.input>

    <x-forms.input name="bplace" type="text">
        <x-slot name="label_text"> Lieu de naissance </x-slot>
    </x-forms.input>

    <select name="classroom">
        <option disabled selected value> -- Séléctionnez une classe -- </option>

        @foreach ($active_classrooms as $year => $establishments)
            @foreach ($establishments as $establishment => $classrooms)

                <optgroup label="{{ $year }} {{ $establishment }}">

                    @foreach ($classrooms as $classroom)
                        <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                    @endforeach

                </optgroup>

            @endforeach
        @endforeach

    </select>

</div>
