<?php
$usuario=$_POST['usuario'];
$password=$_POST['password']
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Bienvenido</title>
    <link href="estilos.css" rel="stylesheet">
    <style>body {background-color: lightgray;}</style>
</head>
<body>
    <div id="dentro" class=container>
  
            <?php
            if ($usuario == 'Gabo' && $password=='1234'){
                echo "<h1>Bienvenido!</h1>";
                echo "<p>Usuario: " . $usuario . "</p>";
                echo "<p>Contraseña: " . $password . "</p>";
                echo "<a href='calculadora.html' class='btn btn-primary'>Ir a Calculadora</a><br><br>";
                echo "<a href='index.php' class='btn btn-danger'>Cerrar sesión</a>";
            }
            else{
            ?>  
                <h1><strong>Usuario NO válido</strong></h1>
                <a href="index.php" class="btn btn-danger">Regresar al login</a>
            <?php
            }
            ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>