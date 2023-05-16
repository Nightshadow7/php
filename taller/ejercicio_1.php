<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container fluid">

        <form action="" method="post">
        <h2>Estudiante 1</h2>
        <label for="" class="m-2">Nota 1</label>
        <input type="number" class="form-control" id="nota1" name="nota1">

        <label for="" class="m-2">Nota 2</label>
        <input type="number" class="form-control" id="nota2" name="nota2">

        <label for="" class="m-2">Nota 3</label>
        <input type="number" class="form-control" id="nota3" name="nota3">

        <button type="submit" class="btn my-4 btn-outline-primary">Enviar</button>
        </form>


    </div>
</body>
</html>
<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];
    $nota3 = $_POST["nota3"];
    $promedio = ($nota1 + $nota2 + $nota3)/3;

    if ($promedio >3.9){
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Usted es becado con un promedio de: {$promedio}";
    } else {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Su promedio es de: {$promedio} ¡Estudie!";
    }


?>