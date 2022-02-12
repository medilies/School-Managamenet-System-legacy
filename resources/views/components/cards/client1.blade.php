<div class="m-2 p-2 rounded-2xl">

    <h3 class="w-full text-xl"> {{ $card_heading }} </h3>

    <div class="ml-1 p-1"> <span class="font-bold"> {{ $client_data->full_name }} </span> </div>
    <div class="ml-2 p-1"> Profession: <span class="text-gray-700 text-sm"> {{ $client_data->profession }} </span>
    </div>
    <div class="ml-2 p-1"> Téléphone: <span class="font-bold"> {{ $client_data->phone }} </span> </div>
    <div class="ml-2 p-1"> Email: <span class="text-gray-700 text-sm"> {{ $client_data->email }} </span> </div>
    <div class="ml-2 p-1"> Addresse: <span class="text-gray-700 text-sm"> {{ $client_data->address }} </span>
    </div>

</div>
