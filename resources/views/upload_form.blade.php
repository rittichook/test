<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Firebase Storage Image Example</title>
</head>
<body>
    <form action="{{ url('/upload') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Upload Image</button>
    </form>

    @if(session('path'))
        <img src="{{ url('/display/' . session('path')) }}" alt="Uploaded Image">
    @endif
</body>
</html>
