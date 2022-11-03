<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Clientes</h2>

    <table>
        <thead>
            <th>
                #
            </th>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Phone
            </th>
            <th>
                Actions
            </th>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <!-- {{ json_encode($clients) }} -->
            <tr>
                <td>
                    {{ $client->id }}
                </td>
                <td>
                    {{ $client->name }}
                </td>
                <td>
                    {{ $client->email }}
                </td>
                <td>
                    {{ $client->phone_number }}
                </td>
                <td>
                    <a href="{{ url('/clients/edit/'.$client->id) }}">
                        editar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

<style>
    *{
        margin-left: 8px;
    }
    table{
        background: lightgray;
        font-size: 24px;
        border-radius: 8px;
    }
</style>