<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container fluid">

        <form action="" method="post">
            <h2>Persona 1</h2>
            <label for="" class="m-2">Nombre persona 1</label>
            <input type="text" class="form-control" id="nombre1" name="nombre1">

            <label for="" class="m-2">Edad persona 1</label>
            <input type="number" class="form-control" id="edad1" name="edad1">

            <h2>Persona 2</h2>
            <label for="" class="m-2">Nombre persona 2</label>
            <input type="text" class="form-control" id="nombre2" name="nombre2">

            <label for="" class="m-2">Edad persona 2</label>
            <input type="number" class="form-control" id="edad2" name="edad2">

            <h2>Persona 3</h3>
            <label for="" class="m-2">Nombre persona 3</label>
            <input type="text" class="form-control" id="nombre3" name="nombre3">

            <label for="" class="m-2">Edad persona 3</label>
            <input type="number" class="form-control" id="edad3" name="edad3">

            <button type="submit" class="btn my-4 btn-outline-primary">Enviar</button>
        </form>
    </div>
</body>
</html>

<?php
    $persona1 = $_POST["nombre1"];
    $persona2 = $_POST["nombre2"];
    $persona3 = $_POST["nombre3"];
    $edad1 = $_POST["edad1"];
    $edad2 = $_POST["edad2"];
    $edad3 = $_POST["edad3"];

    if($edad1>$edad2 && $edad1>$edad3){
        echo "{$persona1} es la mayor de todas con {$edad1} años";
    } else if ($edad2>$edad1 && $edad2>$edad3){
        echo "{$persona2} es la mayor de todas con {$edad2} años";
    } else if ($edad3>$edad1 && $edad3>$edad2){
        echo "{$persona3} es la mayor de todas con {$edad3} años";
    } else {
        echo "Las personas tienen la misma edad";
    }

?>