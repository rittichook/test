<!-- resources/views/components/toggle-switch.blade.php -->

<div class="col-md-4">
    <label for="{{ $attributes->get('id') }}" class="{{ $attributes->get('labelClass') }}" style="font-size: 16px;">{{ $slot }}</label>
    <label class="toggle">
        <input type="checkbox">
        <span class="slider"></span>
    </label>
</div>
