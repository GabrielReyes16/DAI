<?php

include('../conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Recibimos los datos del formulario de edición
$curso_id = $_POST['curso_id'];
$nombre_curso = $_POST['nombre_curso'];
$creditos = $_POST['creditos'];


// Consulta SQL para actualizar los valores
$sql = "DELETE FROM curso WHERE curso_id=$curso_id";

// Ejecutamos la consulta
$resultado = mysqli_query($conexion, $sql);

// Cerramos la conexión
desconectar($conexion);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Eliminar Curso</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            border: 2px solid #000000;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.5);
            max-width: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
    <h3>
        <?php
        if (!$resultado) {
            echo 'La información del curso no fue eliminado';
        }
        else {
            echo 'La información del curso se eliminó correctamente';
        }
        ?>
    </h3>
    <a class="btn btn-warning" href="read_curso.php">Regresar</a>
    </div>
</body>
</html>