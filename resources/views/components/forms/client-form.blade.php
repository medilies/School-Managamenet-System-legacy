<div class="flex flex-wrap mx-2 mb-3 p-1 border">

    <h3 class="w-full"> {{ $form_heading }} </h3>

    <x-forms.input type="text" name="fname">
        <x-slot name="label_text"> Prénom </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="lname">
        <x-slot name="label_text"> Nom </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="address">
        <x-slot name="label_text"> Adresse </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="email">
        <x-slot name="label_text"> E-mail </x-slot>
    </x-forms.input>

    <x-forms.input type="tel" name="phone">
        <x-slot name="label_text"> Téléphone </x-slot>
    </x-forms.input>

    <x-forms.input type="phone" name="profession">
        <x-slot name="label_text"> Profession </x-slot>
    </x-forms.input>

</div>
