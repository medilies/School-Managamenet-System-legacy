<x-app-layout>

    <x-slot:header>
        {{ __('La famille') }}
        @isset($father->lname)
            {{ $father->lname }}
        @endisset

        <a href="{{ route('families.create') }}" title="Ajouter une nouvelle famille"
            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

            <x-icons.plus />
        </a>

    </x-slot:header>

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
                        <x-slot:form_heading> Ajouter le père </x-slot:form_heading>
                    </x-forms.client-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>

            @else

                <x-cards.client1 :client-data="$father">
                    <x-slot:card_heading> Le père </x-slot:card_heading>
                    <div class="flex items-center">

                        <a href="{{ route('clients.show', ['client' => $father->id]) }}" title="Voir"
                            class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">

                            <x-icons.eye />
                        </a>

                        <a href="{{ route('clients.edit', ['client' => $father->id]) }}" title="Modifier"
                            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

                            <x-icons.pencil />
                        </a>

                    </div>
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
                        <x-slot:form_heading> Ajouter la mère</x-slot:form_heading>
                    </x-forms.client-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>

            @else

                <x-cards.client1 :client-data="$mother">
                    <x-slot:card_heading> La mère </x-slot:card_heading>
                    <div class="flex items-center">

                        <a href="{{ route('clients.show', ['client' => $mother->id]) }}" title="Voir"
                            class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">

                            <x-icons.eye />
                        </a>

                        <a href="{{ route('clients.edit', ['client' => $mother->id]) }}" title="Modifier"
                            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

                            <x-icons.pencil />
                        </a>

                    </div>
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
                        <x-slot:card_heading> élève </x-slot:card_heading>
                        <div class="flex items-center">

                            <a href="{{ route('students.show', ['student' => $student->id]) }}" title="Voir"
                                class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">

                                <x-icons.eye />
                            </a>

                            <a href="{{ route('students.edit', ['student' => $student->id]) }}" title="Modifier"
                                class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

                                <x-icons.pencil />
                            </a>

                        </div>
                    </x-cards.student1>
                    {{-- NEED JOINED QUERY to get latest classroom --}}
                    {{-- {{ $student->studentRegistrations->last()->id }} --}}
                </div>
            @endforeach

            <div class="bg-white max-w-screen-sm p-4 m-4 shadow-md rounded-lg">

                <form action={{ route('students.store') }} method="post">

                    @csrf
                    <input type="hidden" name="family_id" value="{{ $family_id }}">

                    <x-forms.student-form>
                        <x-slot:form_heading> Ajouter un fils (élève) </x-slot:form_heading>
                    </x-forms.student-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>
            </div>

        </div>

    </div>

</x-app-layout>
