<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<div class="container fluid">

        <form action="" method="post">
            <h2>Dos numeros</h2>
            <label for="" class="m-2">Numero 1</label>
            <input type="number" class="form-control" id="nota1" name="numero1">

            <label for="" class="m-2">Numero 2</label>
            <input type="number" class="form-control" id="nota2" name="numero2">

            <button type="submit" class="btn my-4 btn-outline-primary">Enviar</button>
        </form>
    </div>    
</body>
</html>

<?php
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $suma = $numero1 + $numero2;
    $diferencia = $numero1 - $numero2;
    $producto = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    if ($numero1 > $numero2) {
        echo "El numero1 es mayor al segundo<br>1. La suma es: {$suma}<br>2. La diferencia es: {$diferencia}";
    } else{
        echo "El numero2 es mayor al primero<br>1. El producto es: {$producto}<br>2. La division es: {$division}";
    }
?>