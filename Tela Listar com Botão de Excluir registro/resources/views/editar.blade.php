<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Carro</title>
</head>

<body>
    <center>
        <h1>Resultados:</h1>
        <hr>


        <form action="/editar-carro/{{$carro->id}}" method="post">
            @csrf
            <label for="lblMarca">marca: </label>
            <input type="text" name="marca" value="{{$carro->marca}}" >

            <br><br>

            <label for="lblAno">ano: </label>
            <input type="text" name="ano" value="{{$carro->ano}}" >

            <br><br>

            <button>confirmar</button>
        </form>

        <br><br>
        
        <a href="/">Voltar</a>
    </center>
</body>

</html>