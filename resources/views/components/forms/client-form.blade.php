<div class="flex flex-wrap mx-2 mb-3 p-1">

    <h3 class="w-full text-xl"> {{ $form_heading }} </h3>

    <x-forms.input type="text" name="fname"
        sms-set-value="{{ isset($client_data->fname) ? $client_data->fname : '' }}">
        <x-slot name="label_text"> Prénom
            @isset($client_data->fname) ( {{ $client_data->fname }} )@endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="lname"
        sms-set-value="{{ isset($client_data->lname) ? $client_data->lname : '' }}">
        <x-slot name="label_text"> Nom
            @isset($client_data->lname) ( {{ $client_data->lname }} )@endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="email"
        sms-set-value="{{ isset($client_data->email) ? $client_data->email : '' }}">
        <x-slot name="label_text"> E-mail
            @isset($client_data->email) ( {{ $client_data->email }} )@endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input type="tel" name="phone"
        sms-set-value="{{ isset($client_data->phone) ? $client_data->phone : '' }}">
        <x-slot name="label_text"> Téléphone
            @isset($client_data->phone) ( {{ $client_data->phone }} )@endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="cni" sms-set-value="{{ isset($client_data->cni) ? $client_data->cni : '' }}"
        maxlength="20">
        <x-slot name="label_text"> Numéro de la carte nationale
            @isset($client_data->cni) ( {{ $client_data->cni }} )@endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input type="text" name="address"
        sms-set-value="{{ isset($client_data->address) ? $client_data->address : '' }}">
        >
        <x-slot name="label_text"> Adresse
            @isset($client_data->address) ( {{ $client_data->address }} )@endisset
        </x-slot>
    </x-forms.input>

    <x-forms.input type="phone" name="profession"
        sms-set-value="{{ isset($client_data->profession) ? $client_data->profession : '' }}" maxlength="32">
        <x-slot name="label_text"> Profession
            @isset($client_data->profession) ( {{ $client_data->profession }} )@endisset
        </x-slot>
    </x-forms.input>

</div>
