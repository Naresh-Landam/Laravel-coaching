<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, {{ Auth::user()->name }}!</h2>

    <p>You are logged in successfully.</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
</html>
