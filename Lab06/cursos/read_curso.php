<?php

include('../conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Consulta SQL
$sql = 'SELECT curso_id, nombre_curso, creditos FROM curso';

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
    <title>Cursos</title>
</head>
<body>
    <div class="container"><br>
            <h1>Cursos</h1>
            <div class="container col-10">
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-warning" type="button" href="create.html">Crear nuevo curso</a>
    </div><br>
    <table class="table table-hover">
            <tr>
                <td class="table-dark" >Id</td>
                <td class="table-dark">Nombre</td>
                <td class="table-dark">Créditos</td>
                <td class="table-dark">&nbsp;</td>
            </tr>
        <tbody>
            <?php
            // Recorremos el array con los datos de los alumnos
            while ($curso = mysqli_fetch_array($resultado)) {
                $curso_id = $curso['curso_id'];
                $nombre = $curso['nombre_curso'];
                $creditos = $curso['creditos'];
                echo '<tr>';
                echo '<td>' . $curso_id . '</td>';
                echo '<td>' . $nombre . '</td>';
                echo '<td>' . $creditos. '</td>';
                echo '<td><a href="update.php?id=' . $curso_id . '" class="btn btn-warning">Editar</a> | <a href="delete.php?id=' .$curso_id.'" class="btn btn-dark">Eliminar</a></td>';
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
        </div>
</body>
</html>