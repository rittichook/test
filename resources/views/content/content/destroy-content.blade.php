{{-- <form action="{{ route('content.destroy', ['content' => str($contents->id)]) }}" method="POST">
    @csrf
    @method('DELETE')

    <x-button type="submit" class="btn-danger">Delete</x-button>
</form> --}}
{{-- <form action="" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-icon btn-2 btn-xs btn bg-gradient-danger my-auto" type="submit">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
          </svg>
    </button>
</form> --}}

<script>
    $('#content-table').on('click', '.delete-content', function() {
        var contentId = $(this).data('id');
        var contentTitle = $(this).data('title');

        var confirmationMessage = 'Are you sure you want to delete content: <span style="color:red"><br>' + contentTitle + '</span><br>This action cannot be undone.';

        Swal.fire({
            title: 'Are you sure?',
            html: confirmationMessage,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            allowOutsideClick: false,
            showLoaderOnConfirm: true,
            preConfirm: () => {
                return new Promise((resolve) => {
                    setTimeout(() => {
                        resolve();
                    }, 2000); // Delay for 2 seconds (you can adjust the time as needed)
                });
            }
        }).then((result) => {
            if (result.isConfirmed) {
                // User clicked the "Yes" button, proceed with deletion
                var deleteUrl = "{{ route('content.destroy', ['id' => ':contentId']) }}";
                deleteUrl = deleteUrl.replace(':contentId', contentId);
                $.ajax({
                    url: deleteUrl,
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add the CSRF token
                    },
                    success: function(response) {
                        window.location.href = '{{ route("content.index") }}';


},
                    error: function(xhr) {
                        window.location.href = '{{ route("content.index") }}';
                    }
                });
            }
        });
    });
</script>
