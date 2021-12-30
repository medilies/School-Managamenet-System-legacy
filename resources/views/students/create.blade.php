<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Class types') }}
        </h2>
    </x-slot>

    <form action='{{ route('students.store') }}' method="post">

        @csrf

        <input type="text" name="fname" value="{{ old('fname', '') }}" placeholder="Prénom"><br>
        @error('fname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="ar_fname" value="{{ old('ar_fname', '') }}" placeholder="الاسم"><br>
        @error('ar_fname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="lname" value="{{ old('lname', '') }}" placeholder="Nom"><br>
        @error('lname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="ar_lname" value="{{ old('ar_lname', '') }}" placeholder="اللقب"><br>
        @error('ar_lname')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="date" name="bday" value="{{ old('bday', '') }}"><br>
        @error('bday')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="bplace" value="{{ old('bplace', '') }}" placeholder="bplace"><br>
        @error('bplace')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Submit</button><br>

    </form>

</x-app-layout>
