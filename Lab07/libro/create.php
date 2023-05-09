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
        <h1>Nuevo Libro</h1>
    <form  name="formCreate" action="create_libro.php" method="POST">
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo del Libro</label>
            <input type="text" class="form-control"name="titulo" placeholder="Nombre del libro" maxlength= "150" required>
        </div>
        <div class="mb-3">
            <label for="autor_id">Seleccione un autor:</label>
            <select name="autor_id" id="autor_id" class="form-select">
                <?php
                    include('../conexion/conexion.php');
                    // Abrimos la conexión a la base de datos
                    $conexion = conectar();
                    // Consulta para obtener los autores y sus IDs (no es prepare statement)
                    $query_autor = "SELECT autor_id, CONCAT(autor_id,' | ',nombres, ' ', ape_paterno) AS nombre_autor FROM autor";
                    $result_autor = mysqli_query($conexion, $query_autor);
                    while($row_autor = mysqli_fetch_array($result_autor)) {
                        echo '<option value="' . $row_autor['autor_id'] . '">' . $row_autor['nombre_autor'] . '</option>';}
                    // Cerramos la conexión
                     desconectar($conexion);
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año de creación</label>
            <input type="number" class="form-control" name="anio" placeholder="Año de creación del libro" maxlength= "4">
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" class="form-control"name="especialidad" placeholder="Especialidad del libro" maxlength= "60" required>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control"name="editorial" placeholder="Editorial del libro" maxlength= "60" required>
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" class="form-control"name="url" placeholder="Enlace al libro" maxlength= "250" required>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
            <button class="btn btn-outline-primary" type="submit">Guardar</button>
            <a class="btn btn-outline-danger" type="button" href="read_libro.php">Cancelar</a>
    </div>
</body> 
</html>