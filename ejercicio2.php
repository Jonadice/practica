<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ejercicio 2</title>
</head>
<body style="background-color: #ffffbf;">
    <div class="container">
        <h1 class="text-center display-4 pb-3">Ejercicio 2</h1>
        <form method="post">
            <label for="parcial_1">Nota parcial 1:</label>
            <input type="number" name="parcial_1" class="form-control" id="parcial_1" min="0.00" max="10" step="0.01" required>
            <label for="parcial_2">Nota parcial 2:</label>
            <input type="number" name="parcial_2" class="form-control" id="parcial_2" min="0.00" max="10" step="0.01" required>
            <label for="parcial_3">Nota parcial 3:</label>
            <input type="number" name="parcial_3" class="form-control" id="parcial_3" min="0.00" max="10" step="0.01" required>
            <label for="examen">Nota examen:</label>
            <input type="number" name="examen" class="form-control" id="examen" min="0.00" max="10" step="0.01" required>
            <label for="trabajo">Nota trabajo ex-aula:</label>
            <input type="number" name="trabajo" class="form-control" id="trabajo" min="0.00" max="10" step="0.01" required>
            <input type="submit" name="aceptar" class="mt-2 btn btn-primary btn-block" value="Aceptar" required>
        </form>
        <hr>
    </div>
</body>
</html>
<?php
    if (isset($_POST['aceptar'])){
        $parcial_1=$_POST['parcial_1'];
        $parcial_2=$_POST['parcial_2'];
        $parcial_3=$_POST['parcial_3'];
        $examen=$_POST['examen'];
        $trabajo=$_POST['trabajo'];
        $parciales=(($parcial_1+$parcial_2+$parcial_3)/3)*0.55;
        $examen*=0.3;
        $trabajo*=0.15;
        $final=$parciales+$examen+$trabajo;
        echo "<div class='container alert-success'>";
            echo "Su nota final es de: $final";
        echo "</div>";
    }
?>