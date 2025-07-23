<!DOCTYPE html>
<html>
<head>
    <title>Products List</title>
</head>
<body>
    <h1>List of Products</h1>

    <ul>
        @foreach($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> — ${{ $product->price }} <br>
                {{ $product->description }}
            </li>
        @endforeach
    </ul>

</body>
</html>
