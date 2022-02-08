<x-app-layout>

    <x-slot name="header">
        {{ __('Ajouté une nouvelle famille') }}
    </x-slot>

    <div class="flex content-between">

        <div class="bg-white p-4 m-4 shadow-md rounded-lg">
            {{-- FATHER --}}
            <form action={{ route('families.store') }} method="post">

                @csrf
                <input type="hidden" name="family_title" value="father">

                <x-forms.client-form>
                    <x-slot name="form_heading"> Ajouter le père</x-slot>
                </x-forms.client-form>

                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

            </form>
        </div>

        <div class="bg-white p-4 m-4 shadow-md rounded-lg">
            {{-- MOTHER --}}
            <form action={{ route('families.store') }} method="post">

                @csrf
                <input type="hidden" name="family_title" value="mother">

                <x-forms.client-form>
                    <x-slot name="form_heading"> Ajouter la mère</x-slot>
                </x-forms.client-form>

                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

            </form>
        </div>

    </div>

    <div class="w-auto h-64 mx-12 my-4 bg-white rounded-lg grid place-content-center">
        <div> Les enfants/étudiants </div>
    </div>

</x-app-layout>
