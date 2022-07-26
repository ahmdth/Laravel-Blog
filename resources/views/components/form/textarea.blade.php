@props(['value'])
<input 
{{ $attributes->merge(['class'=>'bg-blue-500 text-white px-10 py-2 rounded-3xl text-sm cursor-pointer']) }} type="submit" value="{{ $value }}">