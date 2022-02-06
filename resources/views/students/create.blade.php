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

                        <x-forms.student-form :active-classrooms="$active_classrooms">
                            <x-slot name="form_heading"> Ajouter l'étudiant</x-slot>
                        </x-forms.student-form>

                        <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
