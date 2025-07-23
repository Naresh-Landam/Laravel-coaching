<!DOCTYPE html>
<html>
<head>
    <title>Users List</title>
</head>
<body>
    <h1>List of Users</h1>

    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }} — {{ $user->email }}</li>
        @endforeach
    </ul>

</body>
</html>
