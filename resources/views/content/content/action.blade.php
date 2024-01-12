{{-- <a href="{{ route('prefix.edit', $prefix->id) }}">Edit</a> |
<a href="{{ route('prefix.show', $prefix->id) }}">View</a> |
<a href="#" class="delete" data-id="{{ $prefix->id }}">Delete</a> --}}
<div class="d-grid gap-1 d-md-flex justify-content-end">
    @include('content.content.show-content')
    @include('content.content.update-content')
    @include('content.content.destroy-content')
</div>


