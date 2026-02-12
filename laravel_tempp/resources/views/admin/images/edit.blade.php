<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h1>Edit Image</h1>
    <a href="{{ route('images.index') }}" class="btn btn-secondary mb-3">Back to Gallery</a>

    <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- important! tells Laravel this is an update -->

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" value="{{ old('title', $image->title) }}" class="form-control" id="title">
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image (leave empty if not changing)</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>

        <div class="mb-3">
            <label>Current Image:</label><br>
            <img src="{{ asset('images/' . $image->image) }}" width="150" alt="{{ $image->title }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Image</button>
    </form>
</div>
</body>
</html>