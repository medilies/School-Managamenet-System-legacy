<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Class types') }}
        </h2>
    </x-slot>
    <div class="flex justify-center">
        <div class="w-8/12 bg-white p-6 rounded-lg mt-2">

            <div class="flex flex-col mb-1">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class=" shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                            <table class="min-w-full divide-y divide-gray-200">

                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Cycle
                                        </th>
                                        <th scope="col"
                                            class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Class
                                        </th>
                                        <th scope="col"
                                            class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Créé à
                                        </th>
                                        <th scope="col" class="relative px-6 py-3">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">

                                    @foreach ($class_types as $class_type)

                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center">
                                                    <div class="ml-4">
                                                        <div class="text-sm font-medium text-gray-900">
                                                            {{ $class_type->cycle }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">
                                                    {{ $class_type->name }}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-500">
                                                    {{ $class_type->created_at }}
                                                </div>
                                            </td>
                                            <td class=" px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                            </td>
                                        </tr>

                                    @endforeach

                                </tbody>

                            </table>

                        </div>
                    </div>
                </div>
            </div>

            {{ $class_types->links() }}

        </div>
    </div>
</x-app-layout>
