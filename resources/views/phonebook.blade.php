<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Phonebook</title>
    <h1>Welcome to a simple phone book</h1>
</head>
<body>
    @if (session('current_user_id')!='')
        <h1 style="color: blue;">Most welcome {{ session('current_user_id') }}</h1>
    <h3>I can store contacts of your beloved ones</h3>
    <form action="{{ route('myphonebook') }}" method="GET">
        @csrf
        <label for="Name">User Name</label>
        <input type="text" name="name">
        <br>
        <label for="Contact">Contact</label>
        <input type="text" name="contact">
        <br>
        <input type="submit" value="Create Contact" name="button">
        <input type="submit" value="View My Contacts" name="button">
        <input type="submit" value="Log out" name="button">
    </form>
    @else
        <form action="{{ route('login') }}">
            <input type="submit" value="Login" name="login">
        </form>
    @endif
</body>
</html>