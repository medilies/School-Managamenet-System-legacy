<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouté une nouvelle famille') }}
        </h2>
    </x-slot>

    <div class="py-10">

        <div class="flex">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex ">

                        {{-- FATHER --}}
                        <form action={{ route('families.store') }} method="post" class="w-full  border-2 p-4 ">

                            @csrf
                            <input type="hidden" name="family_title" value="father">

                            <x-forms.client-form>
                                <x-slot name="form_heading"> Ajouter le père</x-slot>
                            </x-forms.client-form>

                            <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                        </form>

                    </div>
                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex ">

                        {{-- MOTHER --}}
                        <form action={{ route('families.store') }} method="post" class="w-full  border-2 p-4 ">

                            @csrf
                            <input type="hidden" name="family_title" value="mother">

                            <x-forms.client-form>
                                <x-slot name="form_heading"> Ajouter la mère</x-slot>
                            </x-forms.client-form>

                            <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                        </form>

                    </div>
                </div>
            </div>

        </div>

        <div class="w-auto h-64 mx-12 my-4 bg-blue-100 rounded-lg grid place-content-center">
            <div> Les enfants/étudiants </div>
        </div>

    </div>


</x-app-layout>
