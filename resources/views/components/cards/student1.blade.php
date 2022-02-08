<div class="m-2 p-2 shadow-md rounded-2xl">

    <h3 class="w-full"> {{ $card_heading }} </h3>

    <div class="p-2"> Nom: {{ $student_data->lname }} </div>
    <div class="p-2"> Prenom: {{ $student_data->fname }} </div>
    <div class="p-2"> {{ $student_data->arabic_full_name }} </div>
    <div class="p-2"> Date de naissance: {{ $student_data->bday }} </div>
    <div class="p-2"> Lieu de naissance: {{ $student_data->bplace }} </div>
    <div class="p-2"> Email: {{ $student_data->email }} </div>

</div>
