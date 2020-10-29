<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Contacts</title>
</head>
<body>
    <h3 style="color: red;">Most welcome {{ session('current_user_id') }}</h3>
    <h4>Here are all your contacts</h4>
    <table>
        <tr>
            <td> <b style="color: blue;">Name</b>  </td>
            <td> <b style="color: blue;">Contact</b> </td>
        </tr>
        @foreach($contacts as $contact)
            <tr>
                <td> {{ $contact->name }} </td>
                <td> {{ $contact->contact }} </td>
            </tr>    
        @endforeach
    </table>   

</body>
</html>