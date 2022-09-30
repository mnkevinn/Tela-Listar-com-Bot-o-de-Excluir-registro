<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar carros</title>
</head>

<body>

    <center>
        <h1>Cadastro de carros</h1>

        {{ session() -> get('xyz')}}
        <form action="/inserir-carros" method="post">
            @csrf
            <label for="txtMarca">marca:</label>
            <input type="text" name="marca" id="txtmarca">
            <br><br>
            <label for="txtiano">ano: </label>
            <input type="text" name="ano" id="txtano">
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>

        <br><br>
        <a href="/">Voltar</a>
    </center>
</body>

</html>