<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{ url('clients/') }}">
        @csrf
        @method('PUT')
        <label>Name: </label>
        <input type="text" value="{{$client->name}}" name="name"><br>
        <label>Email: </label>
        <input type="email" value="{{$client->email}}" name="email"><br>
        <label>Phone: </label>
        <input type="text" value="{{$client->phone_number}}" name="phone_number"><br>
        <input type="hidden" name="id" value="{{$client->id}}">
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>

<style>
    *{
        margin-left: 8px;
        margin-top: 8px;
    }
    button{
        border-radius: 8px;
        background: pink;
        font-size: 24px;
    }
    input, label{
        border-radius: 8px;
        font-size: 24px;
    }

</style>