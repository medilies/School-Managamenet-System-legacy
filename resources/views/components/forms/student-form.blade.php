<div class="flex flex-wrap justify-around items-end mx-2">

    <h3 class="w-full text-xl"> {{ $form_heading }} </h3>

    <x-forms.input name="fname" type="text"
        sms-set-value="{{ isset($student_data->fname) ? $student_data->fname : '' }}">
        <x-slot name="label_text"> Prénom
            @isset($student_data->fname) ( {{ $student_data->fname }} ) @endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input name="lname" type="text"
        sms-set-value="{{ isset($student_data->lname) ? $student_data->lname : '' }}">
        <x-slot name="label_text"> Nom
            @isset($student_data->lname) ( {{ $student_data->lname }} ) @endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input name="ar_fname" type="text"
        sms-set-value="{{ isset($student_data->ar_fname) ? $student_data->ar_fname : '' }}">
        <x-slot name="label_text"> الاسم
            @isset($student_data->ar_fname) ( {{ $student_data->ar_fname }} ) @endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input name="ar_lname" type="text"
        sms-set-value="{{ isset($student_data->ar_lname) ? $student_data->ar_lname : '' }}">
        <x-slot name="label_text"> اللقب
            @isset($student_data->ar_lname) ( {{ $student_data->ar_lname }} ) @endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input name="bday" type="date"
        sms-set-value="{{ isset($student_data->bday) ? $student_data->bday : '' }}">
        <x-slot name="label_text"> Date de naissance
            @isset($student_data->bday) ( {{ $student_data->bday }} ) @endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input name="bplace" type="text"
        sms-set-value="{{ isset($student_data->bplace) ? $student_data->bplace : '' }}">
        <x-slot name="label_text"> Lieu de naissance
            @isset($student_data->bplace) ( {{ $student_data->bplace }} ) @endisset
        </x-slot>
    </x-forms.input>


    @isset($active_classrooms)

        <select name="classroom"
            class="bg-gray-100 text-gray-700 border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500 w-1/2 h-11 m-2 rounded-md">
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
    @endisset

    @empty($update_form)


        <x-forms.input name="ex_registration_establishment" type="text">
            <x-slot name="label_text"> L'ancien établissement </x-slot>
        </x-forms.input>

        @isset($class_types_names)

            <div class="w-full md:w-1/2 px-3 mt-3">
                <select name="ex_registration_classroom"
                    class="bg-gray-100 text-gray-700 border border-gray-200 focus:outline-none focus:bg-white focus:border-gray-500 h-11 rounded-md">
                    <option disabled selected value> -- L'ancienne classe -- </option>

                    @foreach ($class_types_names as $class_type)
                        <option value="{{ $class_type }}">{{ $class_type }}</option>
                    @endforeach

                </select>
                @error('ex_registration_classroom')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        @endisset
    @endempty

</div>
