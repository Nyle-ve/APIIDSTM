<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form method="POST" action="http://127.0.0.1:8000/users/">
            @csrf
            <legend>
                Acceso al panel
            </legend>
            <label for="">Name: </label>
            <input name="name" type="text" placeholder="Ingrese su nombre">
            <label for="">Last name: </label>
            <input name="lastname" type="text" placeholder="Ingrese su apellido">
            <button type="submit" style="margin-left: 4px">OK</button>
        </form>
    </div>
</body>
</html>

<style>
    .container{
        margin: 16px;
        color: brown;
    }
    legend{
        font-size: 24px;
        margin-bottom: 8px;
    }
    input, button{
        border-radius: 16px;
    }
    button{
        background-color: pink;
    }
</style>
