<!-- resources/views/components/checkbox.blade.php -->
@props(['id', 'name', 'label', 'checked' => false, 'hover' => false])

<div {{ $attributes->merge(['class' => 'flex items-center p-1 px-1' . ($hover ? 'hover:transition hover:duration-300 hover:ease-in-out hover:scale-105 hover:shadow-blue-500 hover:shadow-modern hover:rounded-md' : '')]) }}>
    <input type="checkbox" id="{{ $id }}" name="{{ $name }}" {{ $checked ? 'checked' : '' }} class="form-checkbox bg-black rounded-lg h-5 w-5 text-indigo-600 transition duration-150 ease-in-out">
    @if($label)
        <label for="{{ $id }}" class="ml-2 block text-sm leading-5 text-gray-300">{{ $label }}</label>
    @endif
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const checkbox = document.getElementById('{{ $id }}');
        if (checkbox) {
            checkbox.checked = false;
        }
    });
</script>
