<x-app-layout>

    <x-slot:header>
        {{ __('Ajouté une nouvelle famille') }}
    </x-slot:header>

    <div class="flex content-between">

        <div class="bg-white py-2 px-4 m-4 shadow-inner rounded-lg">
            {{-- FATHER --}}
            <form action={{ route('families.store') }} method="post">

                @csrf
                <input type="hidden" name="family_title" value="father">

                <x-forms.client-form>
                    <x-slot:form_heading> Ajouter le père </x-slot:form_heading>
                </x-forms.client-form>

                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

            </form>
        </div>

        <div class="bg-white py-2 px-4 m-4 shadow-inner rounded-lg">
            {{-- MOTHER --}}
            <form action={{ route('families.store') }} method="post">

                @csrf
                <input type="hidden" name="family_title" value="mother">

                <x-forms.client-form>
                    <x-slot:form_heading> Ajouter la mère </x-slot:form_heading>
                </x-forms.client-form>

                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

            </form>
        </div>

    </div>

    <div class="w-auto h-64 mx-12 my-4 bg-white rounded-lg grid place-content-center">
        <div> Les enfants/élèves </div>
    </div>

</x-app-layout>
