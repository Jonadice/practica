<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ejercicio 1</title>
</head>
<body style="background-color: #ffffbf;">
    <div class="container">
        <h1 class="text-center display-4 pb-3">Ejercicio 1</h1>
        <form method="post">
            <label for="radio">Ingrese el radio:</label>
            <input type="number" name="radio" class="form-control" id="radio" min="0.01" step="0.01">
            <input type="submit" name="aceptar" class="mt-2 btn btn-primary btn-block" value="Aceptar" required>
        </form>
        <hr>
    </div>
</body>
</html>
<?php
    if (isset($_POST['radio'])){
        $radio=$_POST['radio'];
        echo "<div class='container alert-success'>";
            echo "Radio: $radio<br>";
            echo "Área: ".(pi()*pow($radio,2))."<br>";
            echo "Diámetro: ".$radio*2;
        echo "</div>";
    }
?>