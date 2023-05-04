<?php
include('../conexion.php');
$conexion = conectar();

// Obtener el id del alumno a editar
$alumno_id = $_GET['id'];

// Consulta SQL para obtener los datos del alumno
$sql = "SELECT alumno_id, nombres, ape_paterno, ape_materno FROM alumno WHERE alumno_id = $alumno_id";
$resultado = mysqli_query($conexion, $sql);

// Obtener los datos del alumno
$alumno = mysqli_fetch_array($resultado);
$nombres = $alumno['nombres'];
$ape_paterno = $alumno['ape_paterno'];
$ape_materno = $alumno['ape_materno'];

// Cerrar la conexión
mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Eliminar Alumno</title>
    <style>
        body {
            background-color: ghostwhite ;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
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
    <h1>Eliminar Alumno</h1>
    <form  name="formUpdate" action="delete_alumno.php" method="POST">
        <input type="hidden" name="alumno_id" value="<?php echo $alumno_id ?>">
        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $nombres ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="ape_paterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" id="ape_paterno" name="ape_paterno" value="<?php echo $ape_paterno ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="ape_materno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" id="ape_materno" name="ape_materno" value="<?php echo $ape_materno ?>" readonly>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <button class="btn btn-outline-primary" type="submit">Eliminar</button>
        <a class="btn btn-outline-danger" type="button" href="read_alumno.php">Cancelar</a>
    </div>
</body>
</html>
