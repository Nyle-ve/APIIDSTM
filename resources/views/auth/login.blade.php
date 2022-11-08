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
        <form method="POST" action="{{ url('login/') }}">
            @csrf
            <h1>
                @if(Auth::user())
                    {{ Auth::user()->name }}
                    {{ Auth::user()->lastname }}
                @endif</h1>
            <legend>
                Log In
            </legend>
            <label for="">Email: </label>
            <input name="email" type="text" placeholder="Ingrese su correo">
            <label for="">Password: </label>
            <input name="password" type="password" placeholder="Ingrese su contraseña">
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
