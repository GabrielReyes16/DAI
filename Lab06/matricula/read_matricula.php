<?php
include('../conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Consulta SQL
$sql = 'SELECT matricula_id,a.alumno_id, a.nombres,a.ape_paterno, c.curso_id, c.nombre_curso
FROM matricula m
JOIN alumno a ON m.alumno_id = a.alumno_id
JOIN curso c ON m.curso_id = c.curso_id;';

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
    <title>Matrícula</title>
</head>
<body>
    <div class="container"><br>
            <h1>Matrícula</h1>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" type="button" href="create.php">Matricular a un alumno</a>
    </div><br>
    <table class="table table-hover">
            <tr>
                <td class="table-dark" >Id</td>
                <td class="table-dark">Id_Alumno</td>
                <td class="table-dark">Alumno</td>
                <td class="table-dark">Id_Curso</td>
                <td class="table-dark">Curso</td>
                <td class="table-dark">&nbsp;</td>
            </tr>
        <tbody>
            <?php
            // Recorremos el array con los datos de los alumnos
            while ($matricula = mysqli_fetch_array($resultado)) {
                $matricula_id = $matricula['matricula_id'];
                $alumno_id = $matricula['alumno_id'];
                $alumno_nombre = $matricula['nombres'];
                $alumno_ape_paterno = $matricula['ape_paterno'];
                $curso_id = $matricula['curso_id'];
                $curso_nombre = $matricula['nombre_curso'];
                echo '<tr>';
                echo '<td>' . $matricula_id . '</td>';
                echo '<td>' . $alumno_id . '</td>';
                echo '<td>' . $alumno_nombre .  ' '.$alumno_ape_paterno. '</td>';
                echo '<td>' . $curso_id . '</td>';
                echo '<td>' . $curso_nombre . '</td>';
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