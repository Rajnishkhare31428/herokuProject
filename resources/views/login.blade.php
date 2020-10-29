<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{ route('login') }}" method="GET">
        User Name:<input type="text" name = "username"> <br>
        Password: <input type="password" name = "userpassword"> <br>
        <input type="Submit" value="Login" name="login">
        @csrf
    </form>
    <a href="{{ route('base') }}">Home</a>
</body>
</html>