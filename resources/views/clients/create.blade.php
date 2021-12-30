<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">

                    <form action={{ route('clients.store') }} method="post" class="w-full  border-2 p-4 ">

                        @csrf

                        <div class="flex flex-wrap -mx-3 mb-6 ">

<<<<<<< HEAD
                            <x-forms.input type="text" name="fname">
                                <x-slot name="label_text"> Prénom </x-slot>
                            </x-forms.input>

                            <x-forms.input type="text" name="lname">
                                <x-slot name="label_text"> Nom </x-slot>
                            </x-forms.input>

                            <x-forms.input type="text" name="ar_fname">
                                <x-slot name="label_text"> الاسم </x-slot>
                            </x-forms.input>

                            <x-forms.input type="text" name="ar_fname">
                                <x-slot name="label_text"> اللقب </x-slot>
                            </x-forms.input>

                            <x-forms.input type="text" name="address">
                                <x-slot name="label_text"> Adresse </x-slot>
                            </x-forms.input>

                            <x-forms.input type="text" name="email">
                                <x-slot name="label_text"> Email </x-slot>
                            </x-forms.input>

                            <x-forms.input type="phone" name="tel">
                                <x-slot name="label_text"> Telephone </x-slot>
                            </x-forms.input>

                            <x-forms.input type="phone" name="profession">
                                <x-slot name="label_text"> Profession </x-slot>
                            </x-forms.input>


                        </div>

                        <x-forms.submit-btn />

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
