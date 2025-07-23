<!DOCTYPE html>
<html>
<head>
    <title>Create Replacement Order</title>
</head>
<body>
    <h1>Submit New Replacement Order</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/order">
        @csrf

        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" id="item_name" required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" min="1" required><br><br>

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes"></textarea><br><br>

        <button type="submit">Submit Order</button>
    </form>

    <br>
    <li>
    <strong>Item:</strong> {{ $order->item_name }} |
    <strong>Quantity:</strong> {{ $order->quantity }} |
    <strong>Notes:</strong> {{ $order->notes ?? 'N/A' }} |
    <strong>Submitted At:</strong> {{ $order->created_at }} |
    <a href="/order/{{ $order->id }}/edit">Edit</a>
</li>

    <a href="/orders">Back to Orders</a>
</body>
</html>
