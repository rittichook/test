@props(['type' => 'text'])
<div class="form-floating mb-1" style="text-align: left;">
    <label for="{{ $attributes->get('id') }}" class="{{ $attributes->get('labelClass') }}" style="font-size: 16px;">{{ $slot }}</label>
    <input {{ $attributes->merge(['class' => 'form-control form-label   border rounded border-gray-300', 'type' => $type, 'style' => '',]) }}>
</div>

