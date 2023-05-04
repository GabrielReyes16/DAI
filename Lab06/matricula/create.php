
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
        <h1>Matricular a un alumno</h1>
        <form action="procesar_matricula.php" method="POST">
  <label for="alumno">Seleccione un alumno:</label>
  <select name="alumno" id="alumno">
    <?php
      // Consulta para obtener los alumnos y sus IDs
      $query_alumnos = "SELECT alumno_id, CONCAT(nombres, ' ', ape_paterno, ' ', ape_materno) AS nombre_completo FROM alumno";
      $result_alumnos = mysqli_query($conexion, $query_alumnos);
      while($row_alumno = mysqli_fetch_assoc($result_alumnos)) {
        echo '<option value="' . $row_alumno['alumno_id'] . '">' . $row_alumno['nombre_completo'] . '</option>';
      }
    ?>
  </select>
  <br>
  <label for="curso">Seleccione un curso:</label>
  <select name="curso" id="curso">
    <?php
      // Consulta para obtener los cursos y sus IDs
      $query_cursos = "SELECT curso_id, nombre_curso FROM curso";
      $result_cursos = mysqli_query($conexion, $query_cursos);
      while($row_curso = mysqli_fetch_array($result_cursos)) {
        echo '<option value="' . $row_curso['curso_id'] . '">' . $row_curso['nombre_curso'] . '</option>';
      }
    ?>
  </select>
  <br>
  <input type="submit" value="Matricular">
</form>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
            <button class="btn btn-outline-primary" type="submit">Guardar</button>
            <a class="btn btn-outline-danger" type="button" href="read_alumno.php">Cancelar</a>

    </div>
</body> 
</html>