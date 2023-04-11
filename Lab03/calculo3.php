<?php
$ej3_1 = $_POST['num7'];
$ej3_2 = $_POST['num8'];
$ej3_3 = $_POST['num9'];
$promedio = ($ej3_1 + $ej3_2 + $ej3_3)/3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Promedio</title>
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
<div id="respuesta" class="container">
        <h1>Resultado ejercicio 3</h1><br>
        <?php
        if (round($promedio) >= 13){
                echo "<h2 style='color : green;'>APROBADO</h2><br>";
                echo "<h3> Su promedio fue: ".round($promedio)."</p>";
                echo "<p> Felicidades</p>";
                echo "<br><a href='calculadora.html' class='btn btn-primary'>Volver</a>";          
           } else{
            echo "<h2 style='color : red;'>REPROBADO</h2> <br>";
            echo "<h3> Su promedio fue: ".round($promedio)."</p>";
            echo "<p> Esfuérzate más</p>"; 
            echo "<br><a href='calculadora.html' class='btn btn-danger'>Volver</a>" ;} 
            ?>
            </div>
</body>
</html>