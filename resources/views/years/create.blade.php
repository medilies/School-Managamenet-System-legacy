<x-app-layout>

    <x-slot name="header">
        {{ __('Ajouté la nouvelle année scolaire') }}
    </x-slot>

    <form action={{ route('years.store') }} method="post">

        @csrf

        {{-- REFACTOR min & MAX --}}
        <x-forms.input name="year" type="number" min="{{ (int) date('Y') - 1 }}" max="{{ (int) date('Y') + 1 }}">
            <x-slot name="label_text"> L'année </x-slot>
        </x-forms.input>

        {{-- TURN to component --}}
        <select name="establishment">

            @foreach ($establishments as $establishment)
                <option value="{{ $establishment->id }}">{{ strtoupper($establishment->id) }}
                </option>
            @endforeach

        </select>

        <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

    </form>

</x-app-layout>
