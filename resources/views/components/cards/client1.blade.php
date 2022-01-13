<div class="m-2 p-2 border-2 rounded-2xl">

    <h3 class="w-full"> {{ $card_heading }} </h3>

    <div class="p-2"> Nom: {{ $client_data->lname }} </div>
    <div class="p-2"> Prenom: {{ $client_data->fname }} </div>
    <div class="p-2"> Profession: {{ $client_data->profession }} </div>
    <div class="p-2"> Email: {{ $client_data->email }} </div>
    <div class="p-2"> Téléphone: {{ $client_data->phone }} </div>
    <div class="p-2"> Addresse: {{ $client_data->address }} </div>

</div>
