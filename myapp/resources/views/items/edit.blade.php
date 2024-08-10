<!DOCTYPE html>
<html>
<head>
    <title>Edit Item</title>
</head>
<body>
    <h1>Edit Item</h1>
    <form action="{{ route('items.update', $item->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Name:</label>
        <input type="text" name="name" value="{{ $item->name }}" required>
        <br>
        <label>Description:</label>
        <textarea name="description">{{ $item->description }}</textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>