<!DOCTYPE html>
<html>
<head>
    <title>All Orders</title>
</head>
<body>
    <h1>All Replacement Orders</h1>

    @if (session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('orders.create') }}">+ Submit New Order</a>

    <ul>
        @foreach($orders as $order)
            <li>
                <strong>{{ $order->item_name }}</strong> (Qty: {{ $order->quantity }}) <br>
                Notes: {{ $order->notes ?? 'N/A' }} <br>
                Created: {{ $order->created_at->format('d M Y H:i') }} <br>

                <a href="{{ route('orders.edit', $order->id) }}">Edit</a>

                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Delete this order?')">Delete</button>
                </form>
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>
