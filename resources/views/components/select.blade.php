@props(['options', 'id', 'name', 'placeholder',])

<div {{ $attributes->merge(['class' => 'relative inline-block w-fit p-2 bg-blue-200 dark:bg-blue-700 rounded-md text-gray-700' ]) }}>
    <select id="{{ $id }}" name="{{ $name }}" class="block w-full px-4 py-2 mt-2 text-base placeholder-gray-400 bg-white border border-gray-300 rounded-lg appearance-none focus:border-indigo-500 focus:ring-indigo-500 focus:outline-none dark:bg-gray-800 dark:border-gray-700 dark:placeholder-gray-500 dark:text-gray-300">
        @if($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        @foreach($options as $value => $label)
            <option class="mt-2" value="{{ $value }}">{{ $label }}</option>
        @endforeach
    </select>
</div>
