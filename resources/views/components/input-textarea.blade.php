<div class="flex flex-col">
    <label for="{{ $name }}">{{ $slot }}</label>
    <textarea name="{{ $name }}" id="{{ $name }}"
        class="border-2 rounded-md border-gray-200 focus:outline-none focus:shadow-outline focus:border-blue-400 p-2"
        rows="5">{{ $value }}</textarea>
</div>
