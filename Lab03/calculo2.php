<?php
// Ejercicio 2
$ej2_1 = $_POST['num5'];
$ej2_2 = $_POST['num6'];
$suma = $ej2_1 + $ej2_2;
$resta = $ej2_1 - $ej2_2;
$multi = $ej2_2 * $ej2_1;
$divi = $ej2_2 / $ej2_1;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
    <title>Mayor o menor</title>
</head>
<body>
    <div id="respuesta" class="container">
        <h1>Resultado ejercicio 2</h1><br>
        <?php
        if ($ej2_2 !=0){
            if ($ej2_1 > $ej2_2){
                echo "<h3>Suma y resta</h3><br>";
                echo "<p> Suma de ambos números: " .$suma. "</p>";
                echo "<p> Resta de ambos números: " .$resta. "</p>";
                echo "<p><strong> El primer número es mayor que el segundo </strong></p>";
            }
                else{
                    echo "<h3>Multiplicación y división</h3> <br>";
                    echo "<p> Producto de ambos números: " .$multi. "</p>";
                    echo "<p> Cociente (redondeado) de ambos números: " .round($divi,2). "</p>";
                    echo "<p> <strong> El segundo número es mayor que el primero </strong> </p>";
                    }
           } else{
            echo "<h3>Error! Digite un número distinto de cero</h3> <br>";
               }
                ?>
                <br>
                <a href="calculadora.html" class="btn btn-primary">Volver</a>
    </div>
</body>
</html>