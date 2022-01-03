<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouté un étudiant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex ">


                    <form action={{ route('students.store') }} method="post" class="w-full  border-2 p-4 ">

                        @csrf

                        <div class="flex flex-wrap -mx-3 mb-6 ">

                            <x-forms.input name="fname" type="text">
                                <x-slot name="label_text"> Prénom </x-slot>
                            </x-forms.input>

                            <x-forms.input name="lname" type="text">
                                <x-slot name="label_text"> Nom </x-slot>
                            </x-forms.input>

                            <x-forms.input name="ar_fname" type="text">
                                <x-slot name="label_text"> الاسم </x-slot>
                            </x-forms.input>

                            <x-forms.input name="ar_lname" type="text">
                                <x-slot name="label_text"> اللقب </x-slot>
                            </x-forms.input>

                            <x-forms.input name="bday" type="date">
                                <x-slot name="label_text"> Date de naissance </x-slot>
                            </x-forms.input>

                            <x-forms.input name="bplace" type="text">
                                <x-slot name="label_text"> Lieu de naissance </x-slot>
                            </x-forms.input>

                        </div>

                        <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
