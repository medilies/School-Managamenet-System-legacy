<x-app-layout>

    <x-slot name="header">
        {{ $student->full_name }}

        <a href="{{ route('families.show', ['family' => $student->family_id]) }}" title="Voir la famille"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white mx-1 p-2 rounded-full">

            <x-icons.user-group />
        </a>

        <a href="{{ route('students.show', ['student' => $student->id]) }}" title="Voir"
            class="inline-block bg-green-400 hover:bg-green-500 text-white mx-1 p-2 rounded-full">

            <x-icons.eye />
        </a>

    </x-slot>

    <div class="bg-white w-auto my-4 mx-8 p-2 shadow-inner rounded-lg">
        <form action={{ route('students.update', ['student' => $student->id]) }} method="post">

            @csrf
            @method('PUT')

            <x-forms.student-form :student-data="$student">
                <x-slot name="form_heading"> Mettre à jour les données de l'étudiant </x-slot>
            </x-forms.student-form>

            <x-forms.submit-btn> Mettre à jour </x-forms.submit-btn>

        </form>
    </div>

</x-app-layout>
