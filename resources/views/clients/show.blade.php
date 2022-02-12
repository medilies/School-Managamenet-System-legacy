<x-app-layout>

    <x-slot name="header">
        {{ $client->full_name }}

        <a href="{{ route('families.show', ['family' => $client->family_id]) }}" title="Voir la famille"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white mx-1 p-2 rounded-full">

            <x-icons.user-group />
        </a>

        <a href="{{ route('clients.edit', ['client' => $client->id]) }}" title="Modifier"
            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

            <x-icons.pencil />
        </a>

    </x-slot>

    <x-cards.client1 :client-data="$client" class="bg-white w-1/2 py-2 px-4 m-4 shadow-inner rounded-lg">
        <x-slot name="card_heading"> </x-slot>
    </x-cards.client1>

</x-app-layout>
