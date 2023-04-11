
<?php
//Ejercicio 1
$ej1_1 = $_POST['num1'];
$ej1_2 = $_POST['num2'];
$ej1_3 = $_POST['num3'];
$ej1_4 = $_POST['num4'];
?>
<?php
    $res1= $ej1_1 + $ej1_2;
    $res2=  $ej1_3 * $ej1_4;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Suma y multiplica</title>
    <link href="estilos.css" rel="stylesheet">
</head>
<body>
    <div id="respuesta" class="container">
        <h1>Resultado ejercicio 1</h1>
   
        <p>La summa de los 2 primeros números es: <?php echo $res1 ; ?></p>
		<p>El producto del tercer y cuarto número es: <?php echo $res2; ?></p>

        <a href="calculadora.html" class="btn btn-primary">Volver</a>

</body>
</html>

