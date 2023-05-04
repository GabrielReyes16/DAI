<?php

include('../conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Consulta SQL
$sql = 'SELECT alumno_id, nombres, ape_paterno, ape_materno FROM alumno';

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
    <title>Alumnos</title>
</head>
<body>
    <div class="container"><br>
            <h1>Alumnos</h1>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-success" type="button" href="create.html">Crear nuevo alumno</a>
    </div><br>
    <table class="table table-hover">
            <tr>
                <td class="table-dark" >Id</td>
                <td class="table-dark">Nombres</td>
                <td class="table-dark">Apellido Paterno</td>
                <td class="table-dark">Apellico Materno</td>
                <td class="table-dark">&nbsp;</td>
            </tr>
        <tbody>
            <?php
            // Recorremos el array con los datos de los alumnos
            while ($alumno = mysqli_fetch_array($resultado)) {
                $alumno_id = $alumno['alumno_id'];
                $nombres = $alumno['nombres'];
                $ape_paterno = $alumno['ape_paterno'];
                $ape_materno = $alumno['ape_materno'];
                echo '<tr>';
                echo '<td>' . $alumno_id . '</td>';
                echo '<td>' . $nombres . '</td>';
                echo '<td>' . $ape_paterno . '</td>';
                echo '<td>' . $ape_materno . '</td>';
                echo '<td><a href="update.php?id=' . $alumno_id . '" class="btn btn-success">Editar</a> | <a href="delete.php?id=' .$alumno_id.'" class="btn btn-dark">Eliminar</a></td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <div class="d-grid col-4 mx-auto">
        <a  class="btn btn-danger" href="../index.html">Volver al menu</a>
    </div>
        </div>
</body>
</html>