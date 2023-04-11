<?php
$ej4_1 = $_POST['num10'];
$ej4_2 = $_POST['num11'];
$ej4_3 = $_POST['num12'];
$mayor = $ej4_1;
if ($ej4_2 > $mayor) {
    $mayor = $ej4_2;
}
if ($ej4_3 > $mayor) {
    $mayor = $ej4_3;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Número Mayor</title>
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
<div id="respuesta" class="container">
        <h1>Resultado ejercicio 4</h1><br>
        <?php
            echo "<p> El número mayor de los 3 que me proporcionaste es: ".$mayor."</p>";
        ?>
                <br><a href="calculadora.html" class="btn btn-primary">Volver</a>
            </div>
</body>
</html>