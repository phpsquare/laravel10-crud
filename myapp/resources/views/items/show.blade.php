<!DOCTYPE html>
<html>
<head>
    <title>Show Item</title>
</head>
<body>
    <h1>Item Details</h1>
    <p><strong>Name:</strong> {{ $item->name }}</p>
    <p><strong>Description:</strong> {{ $item->description }}</p>
    <a href="{{ route('items.index') }}">Back to List</a>
</body>
</html>