<form action="{{ route('category.destroy', ['category' => str($row->id)]) }}" method="POST">
    @csrf
    @method('DELETE')
    <x-button type="submit" class="btn-danger">Delete</x-button>
</form>
