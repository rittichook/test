@if ($show)
    <script>
        Swal.fire({
            title: '{{ $title }}',
            text: '{{ $text }}',
            icon: '{{ $icon }}',
        });
    </script>
@endif
