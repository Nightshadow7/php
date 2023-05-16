<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container fluid">

        <form action="" method="post">
        <h2>Determinar el voltaje</h2>
        <label for="" class="m-2">Intensidad</label>
        <input type="number" class="form-control" id="intensidad" name="intensidad">

        <label for="" class="m-2">Resistencia</label>
        <input type="number" class="form-control" id="resistencia" name="resistencia">

        <button type="submit" class="btn my-4 btn-outline-primary">Enviar</button>
        </form>

    </div>
</body>
</html>

<?php
    $intensidad = $_POST["intensidad"];
    $resistencia = $_POST["resistencia"];
    $voltaje = $intensidad * $resistencia;

    echo "El voltaje a partir de<br>La intensidad: {$intensidad}<br>La reistencia : {$resistencia}<br>Es {$voltaje} voltios";
?>