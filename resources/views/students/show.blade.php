<x-app-layout>

    <x-slot name="header">
        {{ $student->full_name }}

        <a href="{{ route('families.show', ['family' => $student->family_id]) }}" title="Voir la famille"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-white mx-1 p-2 rounded-full">

            <x-icons.user-group />
        </a>

        <a href="{{ route('students.edit', ['student' => $student->id]) }}" title="Modifier"
            class="inline-block bg-blue-400 hover:bg-blue-500 text-white mx-1 p-2 rounded-full">

            <x-icons.pencil />
        </a>

    </x-slot>

    <x-cards.student1 :student-data="$student" class="bg-white w-1/2 py-2 px-4 m-4 shadow-inner rounded-lg">
        <x-slot name="card_heading"> </x-slot>
    </x-cards.student1>

</x-app-layout>
