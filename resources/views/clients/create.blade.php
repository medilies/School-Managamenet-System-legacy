<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter un parent') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">

                    <form action={{ route('clients.store') }} method="post" class="w-full  border-2 p-4 ">

                        @csrf

                        <x-forms.client-form>
                            <x-slot name="form_heading"> Client </x-slot>
                        </x-forms.client-form>

                        <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
