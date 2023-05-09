<?php

include('../conexion/conexion.php');

// Abrimos la conexión a la base de datos
$conexion = conectar();
//Obtenemos los valores por medio del método POST
$titulo = $_POST['titulo'];
$autor_id = $_POST['autor_id'];
$anio = $_POST['anio'];
$especialidad = $_POST['especialidad'];
$editorial = $_POST['editorial'];
$url = $_POST['url'];

// Formamos la consulta SQL
$query =$conexion ->prepare('INSERT INTO libro(titulo,autor_id,anio,especialidad,editorial,link) VALUE (?, ?, ?, ?, ?, ?)');
$query ->bind_param('ssssss', $titulo, $autor_id, $anio, $especialidad , $editorial,$url);
$msg= '';
if ($query->execute()) {
    $msg= 'La información del libro se registró correctamente'; 
}
else {
    $msg = 'No se registró la información del libro';
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
    <title>Nuevo Libro</title>
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
        <h3><?php echo $msg; ?></h3>
        <a class="btn btn-success" href="read_libro.php">Regresar</a>
    </div>
</body>
</html>