@props(['type' => 'text', 'name'])

<div>
    <label for="{{ $name }}" class="text-sm ml-2 capitalize">{{ str_replace('_', ' ', $name) }}</label>
    <input
        class="border px-4 py-2 rounded-xl w-full @error($name) border-red-600 @enderror placeholder:text-sm placeholder:capitalize focus:outline-none focus:border-0 focus:ring"
        placeholder="{{ str_replace('_', ' ', $name) }}"
        type="{{ $type }}"
        value="{{ old($name) }}"
        name="{{ $name }}" id="{{ $name }}">
    @error($name)
        <p class="text-red-600 p-2 rounded-xl text-xs">{{ $message }}</p>
    @enderror
</div>
