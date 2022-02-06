<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouté la nouvelle année scolaire') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">


                    <form action={{ route('years.store') }} method="post" class="w-full  border-2 p-4 ">

                        @csrf

                        <div class="flex flex-wrap -mx-3 mb-6 ">

                            {{-- REFACTOR min & MAX --}}
                            <x-forms.input name="year" type="number" min="{{ (int) date('Y') - 1 }}"
                                max="{{ (int) date('Y') + 1 }}">
                                <x-slot name="label_text"> L'année </x-slot>
                            </x-forms.input>

                            {{-- loop on data from DB --}}
                            <select name="establishment">

                                @foreach ($establishments as $establishment)
                                    <option value="{{ $establishment->id }}">{{ strtoupper($establishment->id) }}
                                    </option>
                                @endforeach

                            </select>

                        </div>

                        <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
