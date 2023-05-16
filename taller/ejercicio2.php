<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container fluid">
        <form action="" method="post">
        <h2>Ingrese un numeto</h2>
        <label for="" class="m-2">numero</label>
        <input type="number" class="form-control" id="numero 1" name="numero1">

        <button type="submit" class="btn my-4 btn-outline-primary">Enviar</button>
        </form>

        </label>
    </div>
</body>
</html>

<?php
    $numero = $_POST["numero1"];

    if ($numero > 10 ){
        if ($numero % 2 === 0){
            echo "El numero: {$numero} es mayor que 10 y es par";
        } else {
            echo "El numero: {$numero} es mayor que 10 y es impar";
        }
    } else{
        if ($numero % 2 === 0){
            echo "El numero: {$numero} es menor que 10 y es par";
        } else {
            echo "El numero: {$numero} es menor que 10 y es impar";
        }
    }
?>