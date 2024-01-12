@props(['type' => 'text', 'placeholder' => '', 'label' => '', 'id' => '', 'value' => null])

<div class="form-floating mb-3">
    <input type="{{ $type }}" class="form-control" id="{{ $id }}" placeholder="{{ $placeholder }}" value="{{ $value }}">
    <label for="{{ $id }}">{{ $label }}</label>
</div>
