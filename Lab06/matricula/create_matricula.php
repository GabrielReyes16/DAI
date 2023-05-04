<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Nuevo Curso</title>
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
// Procesar la matrícula
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $alumno_id = $_POST['alumno'];
    $curso_id = $_POST['curso'];
    
    // Consulta para insertar la matrícula
    $query_matricula = "INSERT INTO matricula (alumno_id, curso_id) VALUES ($alumno_id, $curso_id)";
    $result_matricula = mysqli_query($conexion, $query_matricula);
    
    if ($result_matricula) {
      echo "Matrícula realizada con éxito";
    } else {
      echo "Error al matricular al alumno";
    }
  }
  
        ?>
    </h3>
        <a class="btn btn-warning" href="read_curso .php">Regresar</a>
    </div>
</body>
</html>