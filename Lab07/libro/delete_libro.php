<?php

include('../conexion/conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();

// Recibimos los datos del formulario de eliminación
$libro_id = $_POST['libro_id'];
$titulo = $_POST['titulo'];
$autor_id = $_POST['autor_id'];
$anio = $_POST['anio'];
$especialidad = $_POST['especialidad'];      
$editorial = $_POST['editorial'];              
$url = $_POST['url'];

// Formamos la consulta SQL
$query =$conexion ->prepare("DELETE FROM libro  WHERE libro_id= ?");
$query ->bind_param('s', $libro_id);
$msg= '';
if ($query->execute()) {
    $msg= 'La información del libro ha sido eliminada'; 
}
else {
    $msg = 'No se pudo eliminar la información del autor';
}
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
    <title>Eliminar Libro</title>
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
        <h3> <?php echo $msg ?></h3>
        <a class="btn btn-success" href="read_libro.php">Regresar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>