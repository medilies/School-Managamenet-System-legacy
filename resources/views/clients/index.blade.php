<x-app-layout>

    <x-slot:header>
        {{ __('Liste des parents') }}
    </x-slot:header>

    <div class="overflow-x-auto">
        <div class="p-2 inline-block min-w-full">

            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50 text-left text-xs text-gray-500 uppercase tracking-wider">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Nom
                            </th>

                            <th scope="col" class="px-6 py-3 font-medium">
                                Contact
                            </th>

                            <th scope="col" class="px-6 py-3 font-medium">
                                Addresse
                            </th>

                            <th scope="col" class="px-6 py-3 font-medium">
                                Inscrit le
                            </th>

                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>

                        </tr>

                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($clients as $client)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $client->full_name }}
                                            </div>
                                            <div class="text-sm text-gray-500">
                                                {{ $client->profession }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $client->phone }}</div>
                                    <div class="text-sm text-gray-500">à {{ $client->email }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $client->address }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $client->created_at }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('clients.show', ['client' => $client->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900"> Voir </a>
                                    -
                                    <a href="{{ route('clients.edit', ['client' => $client->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900"> Modifier </a>
                                    -
                                    <a href="{{ route('families.show', ['family' => $client->family_id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900"> Famille </a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>

    {{ $clients->links() }}

    </div>
    </div>



</x-app-layout>
