<div>
    <label for="{{ $name }}">{{ $slot }}</label>
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" {{ $checked ? "checked" : "" }}>
</div>
