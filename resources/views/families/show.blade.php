<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('La famille') }}
            @isset($father->lname)
                {{ $father->lname }}
            @endisset
        </h2>
    </x-slot>

    <div class="py-10">

        {{-- CLIENTS --}}
        <div class="flex">

            {{-- FATHER --}}
            <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    @if (empty($father->fname))

                        <div class="p-6 bg-white border-b border-gray-200 flex ">

                            <form action={{ route('clients.store') }} method="post" class="w-full border-2 p-4">

                                @csrf
                                <input type="hidden" name="family_title" value="father">
                                <input type="hidden" name="family_id" value="{{ $family_id }}">

                                <x-forms.client-form>
                                    <x-slot name="form_heading"> Ajouter le père</x-slot>
                                </x-forms.client-form>

                                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                            </form>

                        </div>

                    @else

                        <x-cards.client1 :client-data="$father">
                            <x-slot name="card_heading"> Le père </x-slot>
                        </x-cards.client1>

                    @endif

                </div>
            </div>

            {{-- MOTHER --}}
            <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    @if (empty($mother->fname))

                        <div class="p-6 bg-white border-b border-gray-200 flex ">

                            <form action={{ route('clients.store') }} method="post" class="w-full border-2 p-4">

                                @csrf
                                <input type="hidden" name="family_title" value="mother">
                                <input type="hidden" name="family_id" value="{{ $family_id }}">

                                <x-forms.client-form>
                                    <x-slot name="form_heading"> Ajouter la mère</x-slot>
                                </x-forms.client-form>

                                <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                            </form>

                        </div>

                    @else

                        <x-cards.client1 :client-data="$mother">
                            <x-slot name="card_heading"> La mère </x-slot>
                        </x-cards.client1>

                    @endif

                </div>
            </div>

        </div>

        {{-- STUDENTS --}}

        <div class="w-auto mx-12 my-4 p-2 bg-blue-100 rounded-lg">


            <div class="w-full"> {{ $students->count() }} {{ Str::plural('enfant', $students->count()) }}
            </div>

            <div class="flex flex-wrap">

                @foreach ($students as $student)

                    <div class="w-1/4">
                        <x-cards.student1 :student-data="$student">
                            <x-slot name="card_heading"> étudiant </x-slot>
                        </x-cards.student1>
                    </div>

                @endforeach

                <div class="w-1/2 p-6 bg-white border-b border-gray-200 flex ">

                    <form action={{ route('students.store') }} method="post" class="w-full  border-2 p-4 ">

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

    </div>


</x-app-layout>
