<?php
include('../conexion.php');
$conexion = conectar();

// Obtener el id del curso a editar
$curso_id = $_GET['id'];

// Consulta SQL para obtener los datos del curso
$sql = "SELECT curso_id, nombre_curso, creditos  FROM curso WHERE curso_id = $curso_id";
$resultado = mysqli_query($conexion, $sql);

// Obtener los datos del curso
$curso = mysqli_fetch_array($resultado);
$nombre_curso = $curso['nombre_curso'];
$creditos = $curso['creditos'];


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
    <title>Editar Curso</title>
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
    <h1>Editar Curso</h1>
    <form  name="formUpdate" action="update_curso.php" method="POST">
        <input type="hidden" name="curso_id" value="<?php echo $curso_id ?>">
        <div class="mb-3">
            <label for="nombre_curso" class="form-label">Nombre del curso</label>
            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="<?php echo $nombre_curso ?>">
        </div>
        <div class="mb-3">
            <label for="creditos" class="form-label">Creditos</label>
            <input type="number" class="form-control" id="creditos" name="creditos" value="<?php echo $creditos ?>">
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <button class="btn btn-outline-primary" type="submit">Guardar</button>
        <a class="btn btn-outline-danger" type="button" href="read_curso.php">Cancelar</a>
    </div>
</body>
</html>
