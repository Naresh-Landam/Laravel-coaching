<!-- resources/views/orders/create.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Submit Order</title>
</head>

<body>
    <h1>Submit a New Order</h1>
     @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
        <label>Item Name:</label>
        <input type="text" name="item_name" required><br>

        <label>Quantity:</label>
        <input type="number" name="quantity" min="1" required><br>

        <label>Notes:</label>
        <textarea name="notes"></textarea><br>

        <button type="submit">Submit</button>
    </form>

    <a href="{{ route('orders.index') }}">← Back to Orders</a>
</body>

</html>
