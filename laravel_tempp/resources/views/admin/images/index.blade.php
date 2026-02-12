<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gallery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Gallery Images</h1>
    <a href="{{ route('images.create') }}" class="btn btn-primary mb-3">Add New Image</a>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($images as $image)
            <tr>
                <td>{{ $image->id }}</td>
                <td>{{ $image->title }}</td>
                <td>
                    <img src="{{ asset('images/' . $image->image) }}" width="100" alt="{{ $image->title }}">
                </td>
                <td>
                    <a href="{{ route('images.edit', $image->id) }}" class="btn btn-sm btn-warning">Edit</a>

                    <form action="{{ route('images.destroy', $image->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No images found</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>