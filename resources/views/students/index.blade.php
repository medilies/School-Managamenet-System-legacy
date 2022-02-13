<x-app-layout>

    <x-slot:header>
        {{ __('Liste des élèves') }}
    </x-slot:header>

    <div class="overflow-x-auto">
        <div class="p-2 inline-block min-w-full">

            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">

                <table class="min-w-full divide-y divide-gray-200">

                    <thead class="bg-gray-50 text-gray-500 text-left text-xs font-medium uppercase tracking-wider">
                        <tr>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Nom
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Naissance
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Etat
                            </th>
                            <th scope="col" class="px-6 py-3 font-medium">
                                Inscrit le
                            </th>
                            <th scope="col" class="relative px-6 py-3 font-medium">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>

                    </thead>

                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($students as $student)
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                                                alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900"> {{ $student->full_name }}
                                            </div>
                                            <div class="text-sm text-gray-500"> {{ $student->arabic_full_name }}
                                            </div>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"> {{ $student->bday }} </div>
                                    <div class="text-sm text-gray-500"> à {{ $student->bplace }} </div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        ?
                                    </span>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $student->created_at }}
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('students.show', ['student' => $student->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900"> Voir </a>
                                    -
                                    <a href="{{ route('students.edit', ['student' => $student->id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900"> Modifier </a>
                                    -
                                    <a href="{{ route('families.show', ['family' => $student->family_id]) }}"
                                        class="text-indigo-600 hover:text-indigo-900"> Famille </a>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>

    {{ $students->links() }}

</x-app-layout>
