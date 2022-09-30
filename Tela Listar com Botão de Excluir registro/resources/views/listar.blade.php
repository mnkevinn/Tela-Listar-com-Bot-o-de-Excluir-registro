<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar carros</title>

    <style>
        table,td,th {
            border: 1px solid;
            padding: 20px;
            border-collapse: collapse;
        }


    </style>
</head>

<body>

    <center>
        <h1>Listagem de Carros</h1>
        <br><br>

        <table>
            <thead>
                <tr>
                    <th>marca</th>
                    <th>ano</th>
                    <th>*</th>
                    <th>*</th>
                </tr>
            </thead>
            <tbody>
                <!-- Dados do banco -->
                @foreach ($carros as $c)
                <tr>
                    <td>{{$c->marca}}</td>
                    <td>{{$c->ano}}</td>
                    <td><a href="/editar/{{$c->id}}">Editar</a></td>
                    <td><a href="/apagar/{{$c->id}}">apagar</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <br><br>
        <a href="/">Voltar</a>
    </center>
</body>

</html>