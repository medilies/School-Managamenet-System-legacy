<x-app-layout>

    <x-slot name="header">
        {{ __('Etablisments') }}
    </x-slot>

    <div class="flex justify-center mt-2">
        <div class="w-8/12 bg-white p-6 rounded-lg mt-1">

            <div class="flex">
                @foreach ($establishments as $establishment)

                    {{-- src: https://tailwindcomponents.com/component/property-card --}}
                    <div class="max-w-6xl mx-auto">
                        <div class="flex items-center justify-center">
                            <div class="max-w-sm w-full sm:w-full lg:w-full py-6 px-3">
                                <div class="bg-white shadow-xl rounded-lg overflow-hidden">

                                    <div class="bg-cover bg-center h-56 p-4"
                                        style="background-image: url(https://via.placeholder.com/450x450)">
                                    </div>

                                    <div class="p-4">
                                        <p class="text-3xl text-gray-900">{{ $establishment->establishment }}
                                        </p>
                                    </div>

                                    <div class="flex p-4 border-t border-gray-300 text-gray-700">

                                        <div class="flex-1 inline-flex items-center">
                                            {{-- academic-cap --}}
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                                <path
                                                    d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                                </path>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222">
                                                </path>
                                            </svg>
                                            <p><span class="text-gray-900 font-bold">{{ rand(50, 180) }}</span>
                                                Etudiants</p>
                                        </div>

                                        <div class="flex-1 inline-flex items-center">
                                            {{-- open-book --}}
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                                </path>
                                            </svg>
                                            <p><span class="text-gray-900 font-bold"> {{ rand(0, 12) }}</span> Classes
                                            </p>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>

        </div>
    </div>
</x-app-layout>
