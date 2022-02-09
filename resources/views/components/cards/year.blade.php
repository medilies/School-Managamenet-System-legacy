<div class="max-w-xs rounded-lg overflow-hidden shadow-lg m-2">

    <img class="w-full" src="https://via.placeholder.com/250x150" alt="Sunset in the mountains">

    <div class="bg-white px-6 py-4">

        <h3 class="font-bold text-xl mb-2"> {{ strtoupper($establishment) }} </h3>

        <div class="flex items-center">

            <a href="{{ route('years.show', ['year' => $year_id]) }}"
                class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">
                <x-icons.eye />
            </a>

            <a href="{{ route('classrooms_capacity.edit', ['year' => $year_id]) }}"
                class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">
                <x-icons.pencil />
            </a>

            <a href="#"
                class="inline-block mx-1 p-2 border border-yellow-600 hover:bg-yellow-600 hover:text-white rounded-2xl font-bold">
                state
            </a>

        </div>


    </div>

</div>
