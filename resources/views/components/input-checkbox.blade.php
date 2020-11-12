<div>
    <label for="{{ $name }}">{{ $slot }}</label>
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ $checked ? "checked" : "" }}
        class="form-checkbox h-5 w-5 text-blue-400">
</div>
