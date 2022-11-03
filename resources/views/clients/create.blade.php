<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/clients">
        @csrf
        <label>Name: </label>
        <input type="text" placeholder="Maria" name="name"><br>
        <label>Email: </label>
        <input type="email" placeholder="example@domail.com" name="email"><br>
        <label>Phone: </label>
        <input type="text" placeholder="6120000000" name="phone_number"><br>
        <button type="submit">Guardar</button>
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