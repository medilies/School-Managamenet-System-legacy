<x-app-layout>

    <x-slot name="header">
        {{ $client->full_name }}

        <a href="{{ route('families.show', ['family' => $client->family_id]) }}" title="Voir la famille"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white mx-1 p-2 rounded-full">

            <x-icons.user-group />
        </a>

        <a href="{{ route('clients.show', ['client' => $client->id]) }}" title="Voir"
            class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">

            <x-icons.eye />
        </a>

    </x-slot>

    <div class="bg-white w-auto my-4 mx-8 p-2 shadow-inner rounded-lg">
        <form action={{ route('clients.update', ['client' => $client->id]) }} method="post">

            @csrf
            @method('PUT')

            <x-forms.client-form :client-data="$client">
                <x-slot name="form_heading"> Mettre à jour les données du client </x-slot>
            </x-forms.client-form>

            <x-forms.submit-btn> Mettre à jour </x-forms.submit-btn>

        </form>
    </div>

</x-app-layout>
