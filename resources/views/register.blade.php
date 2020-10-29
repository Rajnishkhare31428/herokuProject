<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
<form action="{{ route('register') }}" method="GET">
        Name:<input type="name" name = "name"> <br>
        Email:<input type="email" name = "email"> <br>
        Contact:<input type="contact" name = "contact"> <br>
        Password: <input type="password" name = "userpassword"> <br>
        Password: <input type="password" name = "cuserpassword"> <br>
        <input type="Submit" value="Register" name="register">
        
    </form>
    <a href="{{ route('base') }}">Home</a>
</body>
</html>