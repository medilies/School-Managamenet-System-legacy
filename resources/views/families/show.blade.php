<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('La famille') . ' ' . $father->lname }}
        </h2>
    </x-slot>

    <div class="py-10">

        <div class="flex">

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    @if (empty($father->fname))

                        <div class="p-6 bg-white border-b border-gray-200 flex ">

                            <form action={{ route('clients.store') }} method="post" class="w-full  border-2 p-4 ">

                                @csrf
                                <input type="hidden" name="family_title" value="father">
                                <input type="hidden" name="family_id" value="{{ $family_id }}">

                                <x-forms.client-form>
                                    <x-slot name="form_heading"> Ajouter le père</x-slot>
                                </x-forms.client-form>

                                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                            </form>

                        </div>

                    @else

                        @component('components.cards.client1', ['client_data' => $father])
                            <x-slot name="card_heading"> le père </x-slot>
                        @endcomponent

                    @endif

                </div>
            </div>

            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    @if (empty($mother->fname))

                        <div class="p-6 bg-white border-b border-gray-200 flex ">

                            <form action={{ route('clients.store') }} method="post" class="w-full  border-2 p-4 ">

                                @csrf
                                <input type="hidden" name="family_title" value="mother">
                                <input type="hidden" name="family_id" value="{{ $family_id }}">

                                <x-forms.client-form>
                                    <x-slot name="form_heading"> Ajouter la mère</x-slot>
                                </x-forms.client-form>

                                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                            </form>

                        </div>

                    @else

                        @component('components.cards.client1', ['client_data' => $mother])
                            <x-slot name="card_heading"> la mère </x-slot>
                        @endcomponent

                    @endif

                </div>
            </div>

        </div>

        <div class="w-auto h-64 mx-12 my-4 bg-blue-100 rounded-lg grid place-content-center">
            <div> Les enfants/étudiants </div>
        </div>

    </div>


</x-app-layout>
