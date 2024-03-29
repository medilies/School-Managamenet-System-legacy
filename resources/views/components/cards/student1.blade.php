<div class="m-2 p-2 shadow-md rounded-2xl">

    <h3 class="w-full text-xl"> {{ $card_heading }} </h3>

    <div class="ml-1 p-1"> <span class="font-bold"> {{ $student_data->full_name }} </span> </div>
    <div class="ml-1 p-1"> <span class=""> {{ $student_data->arabic_full_name }} </span> </div>
    <div class="ml-2 p-1"> Naissance: <span class="text-gray-700 text-sm"> {{ $student_data->bday }} à
            {{ $student_data->bplace }}
        </span>
    </div>
    <div class="ml-2 p-1"> Email: <span class="font-bold"> {{ $student_data->email }} </span> </div>
    <div class="ml-2 p-1"> La derniere inscription: <span class="font-bold">
            {{ $student_data->class_type }} (
            {{ $student_data->status }} ) </span> </div>
    <div class="ml-4 p-1 text-sm"> L'ancienne classe:
        {{ $student_data->ex_registration_classroom }}
        {{ $student_data->ex_registration_establishment }}
    </div>

    {{ $slot }}

</div>
