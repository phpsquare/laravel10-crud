<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
</head>
<body>
    <h1>Items</h1>
    <a href="{{ route('items.create') }}">Create New Item</a>
    <ul>
        @foreach ($items as $item)
            <li>
                <a href="{{ route('items.show', $item->id) }}">{{ $item->name }}</a>
                <a href="{{ route('items.edit', $item->id) }}">Edit</a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>