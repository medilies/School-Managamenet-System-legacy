<x-app-layout>

    <x-slot name="header">
        {{ __('La famille') }}
        @isset($father->lname)
            {{ $father->lname }}
        @endisset

        <a href="{{ route('families.create') }}" title="Ajouter une nouvelle famille"
            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

            <x-icons.plus />
        </a>

    </x-slot>

    {{-- CLIENTS --}}
    <div class="flex content-between">

        {{-- FATHER --}}
        <div class="bg-white w-1/2 py-2 px-4 m-4 shadow-inner rounded-lg">

            @if (empty($father->fname))
                <form action={{ route('clients.store') }} method="post">

                    @csrf
                    <input type="hidden" name="family_title" value="father">
                    <input type="hidden" name="family_id" value="{{ $family_id }}">

                    <x-forms.client-form>
                        <x-slot name="form_heading"> Ajouter le père</x-slot>
                    </x-forms.client-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>

            @else

                <x-cards.client1 :client-data="$father">
                    <x-slot name="card_heading"> Le père </x-slot>
                </x-cards.client1>
            @endif

        </div>

        {{-- MOTHER --}}
        <div class="bg-white w-1/2 py-2 px-4 m-4 shadow-inner rounded-lg">

            @if (empty($mother->fname))
                <form action={{ route('clients.store') }} method="post">

                    @csrf
                    <input type="hidden" name="family_title" value="mother">
                    <input type="hidden" name="family_id" value="{{ $family_id }}">

                    <x-forms.client-form>
                        <x-slot name="form_heading"> Ajouter la mère</x-slot>
                    </x-forms.client-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>

            @else

                <x-cards.client1 :client-data="$mother">
                    <x-slot name="card_heading"> La mère </x-slot>
                </x-cards.client1>
            @endif

        </div>

    </div>

    {{-- STUDENTS --}}
    <div class="bg-white w-auto my-4 mx-8 p-2 shadow-inner rounded-lg">

        <div class="mt-2 ml-2 text-lg">
            <span class="font-bold"> {{ $students->count() }} </span>
            {{ Str::plural('enfant', $students->count()) }}
        </div>

        <div class="flex flex-wrap justify-around">

            @foreach ($students as $student)
                <div class="">
                    <x-cards.student1 :student-data="$student">
                        <x-slot name="card_heading"> élève </x-slot>
                    </x-cards.student1>
                    {{-- NEED JOINED QUERY to get latest classroom --}}
                    {{-- {{ $student->studentRegistrations->last()->id }} --}}
                </div>
            @endforeach

            <div class="bg-white max-w-screen-sm p-4 m-4 shadow-md rounded-lg">

                <form action={{ route('students.store') }} method="post">

                    @csrf
                    <input type="hidden" name="family_id" value="{{ $family_id }}">

                    <x-forms.student-form :active-classrooms="$active_classrooms">
                        <x-slot name="form_heading"> Ajouter un fils (élève) </x-slot>
                    </x-forms.student-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>
            </div>

        </div>

    </div>

</x-app-layout>
