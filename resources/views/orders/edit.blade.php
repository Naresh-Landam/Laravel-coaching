<!DOCTYPE html>
<html>

<head>
    <title>Edit Order</title>
</head>

<body>
    <h1>Edit Replacement Order</h1>
 @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div style="color: rgba(155, 32, 32, 0.493);">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/order/{{ $order->id }}/update">
        @csrf

        <label for="item_name">Item Name:</label>
        <input type="text" name="item_name" id="item_name" value="{{ old('item_name', $order->item_name ?? '') }}"
            required><br><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" value="{{ old('quantity', $order->quantity ?? '') }}"
            required><br><br>

        <label for="notes">Notes:</label>
        <textarea name="notes" id="notes">{{ old('notes', $order->notes ?? '') }}</textarea><br><br>


        <button type="submit">Update Order</button>
    </form>

    <br>
    <a href="/orders">Back to Orders</a>
</body>

</html>
