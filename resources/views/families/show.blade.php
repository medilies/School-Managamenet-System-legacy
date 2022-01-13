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

                            <form action={{ route('families.clients.store', ['family' => $family_id]) }} method="post"
                                class="w-full border-2 p-4">

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

                        @component('components.cards.client1', ['client_data' => $father])
                            <x-slot name="card_heading"> le père </x-slot>
                        @endcomponent

                    @endif

                </div>
            </div>

            {{-- MOTHER --}}
            <div class="w-1/2 mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                    @if (empty($mother->fname))

                        <div class="p-6 bg-white border-b border-gray-200 flex ">

                            <form action={{ route('families.clients.store', ['family' => $family_id]) }} method="post"
                                class="w-full  border-2 p-4 ">

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

                        @component('components.cards.client1', ['client_data' => $mother])
                            <x-slot name="card_heading"> la mère </x-slot>
                        @endcomponent

                    @endif

                </div>
            </div>

        </div>

        {{-- STUDENTS --}}
        <div class="w-auto mx-12 my-4 p-2 bg-blue-100 rounded-lg flex">

            @foreach ($students as $student)

                @component('components.cards.student1', ['student_data' => $student])
                    <x-slot name="card_heading"> étudiant </x-slot>
                @endcomponent

            @endforeach

            <div class="w-1/3 p-6 bg-white border-b border-gray-200 flex ">

                <form action={{ route('families.students.store', ['family' => $family_id]) }} method="post"
                    class="w-full  border-2 p-4 ">

                    @csrf
                    <input type="hidden" name="family_id" value="{{ $family_id }}">

                    <x-forms.student-form>
                        <x-slot name="form_heading"> Ajouter l'étudiant</x-slot>
                    </x-forms.student-form>

                    <x-forms.submit-btn> Ajouter </x-forms.submit-btn>

                </form>

            </div>

        </div>

    </div>


</x-app-layout>
