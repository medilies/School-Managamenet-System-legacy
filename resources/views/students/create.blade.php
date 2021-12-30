<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Class types') }}
        </h2>
    </x-slot>

            <form action='{{route("students.store")}}' method="post">
                @csrf
                <input type="text" name="fname" placeholder="fname">
                <input type="text" name="ar_fname" placeholder="ar_fname">
                <input type="text" name="lname" placeholder="lname">
                <input type="text" name="ar_lname" placeholder="ar_lname">
                <input type="date" name="bday">
                <input type="text" name="bplace" placeholder="bplace">

                <button type="submit">Submit</button>
            </form>

</x-app-layout>
