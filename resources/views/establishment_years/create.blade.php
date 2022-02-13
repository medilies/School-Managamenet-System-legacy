<x-app-layout>

    <x-slot:header>
        {{ __('Ajouté la nouvelle année scolaire') }}
    </x-slot:header>

    <form action={{ route('establishment-years.store') }} method="post">

        @csrf

        <select name="year">

            @foreach ($years as $year)
                <option value="{{ $year->id }}">{{ $year->id }}
                </option>
            @endforeach

        </select>

        <select name="establishment">

            @foreach ($establishments as $establishment)
                <option value="{{ $establishment->id }}">{{ strtoupper($establishment->id) }}
                </option>
            @endforeach

        </select>

        <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

    </form>

</x-app-layout>
