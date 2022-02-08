<x-app-layout>

    <x-slot name="header">
        {{ __('La famille') }}
        @isset($father->lname)
            {{ $father->lname }}
        @endisset
    </x-slot>

    {{-- CLIENTS --}}
    <div class="flex content-between">

        {{-- FATHER --}}
        <div class="bg-white w-1/2 p-4 m-4 shadow-md rounded-lg">

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
        <div class="bg-white w-1/2 p-4 m-4 shadow-md rounded-lg">

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
    <div class="bg-white w-auto my-4 mx-8 p-2 rounded-lg">

        <div>
            {{ $students->count() }} {{ Str::plural('enfant', $students->count()) }}
        </div>

        <div class="flex flex-wrap">

            @foreach ($students as $student)

                <div class="w-1/4">
                    <x-cards.student1 :student-data="$student">
                        <x-slot name="card_heading"> étudiant </x-slot>
                    </x-cards.student1>
                </div>

            @endforeach

            <div class="bg-white w-1/2 p-4 m-4 shadow-md rounded-lg">

                <form action={{ route('students.store') }} method="post">

                    @csrf
                    <input type="hidden" name="family_id" value="{{ $family_id }}">

                    <x-forms.student-form :active-classrooms="$active_classrooms">
                        <x-slot name="form_heading"> Ajouter l'étudiant</x-slot>
                    </x-forms.student-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>
            </div>

        </div>

    </div>

</x-app-layout>
