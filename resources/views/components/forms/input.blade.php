<div class="w-full md:w-1/2 px-3 mt-3">

    {{-- LABEL --}}
    <label class="block tracking-wide text-gray-700 text-xs font-bold mb-1 " for="{{ $name }}">
        {{ $label_text }}
    </label>

    {{-- INPUT --}}
    <input name="{{ $name }}" type="{{ $type ?? 'text' }}" value="{{ old($name, '') }}" {{ $attributes }}
        class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 p-2 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">

    {{-- ERROR MSG --}}
    @error($name)
        <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
        </div>
    @enderror

</div>
