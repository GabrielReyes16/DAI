<?php
include('../conexion/conexion.php');
$conexion = conectar();

// Obtener el id del libro a eliminar
$libro_id = $_GET['id'];

// Consultamos a la base de datos
$query = $conexion ->prepare("SELECT * FROM libro WHERE libro_id = '$libro_id'");

// Ejecutamos la consulta
$query -> execute();
$resultado = $query -> get_result();

// Obtener los datos del libro
$libro = mysqli_fetch_array($resultado);
$titulo = $libro['titulo'];
$autor_id = $libro['autor_id'];
$anio = $libro['anio'];
$especialidad = $libro['especialidad'];      
$editorial = $libro['editorial'];              
$url = $libro['link'];
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
    <h1>Eliminar Libro</h1>
    <form  name="formCreate" action="delete_libro.php" method="POST">
        <input type="hidden" name="libro_id" value="<?php echo $libro_id ?>">
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo del Libro</label>
            <input type="text" class="form-control"name="titulo" placeholder="Nombre del libro" value="<?php echo $titulo ?>" readonly>
        </div>
        <div class="mb-3">
                <?php
                    //Consulta para recuperar el nombre del autor y el ID del autor seleccionado (para eliminarlo)
                    $query_nombre_autor = "SELECT autor_id, CONCAT(autor_id,' | ',nombres, ' ', ape_paterno) AS nombre_autor FROM autor WHERE autor_id = $autor_id";
                    $result_nombre_autor = mysqli_query($conexion, $query_nombre_autor);
                    $autor_nombre = mysqli_fetch_array($result_nombre_autor);
                    $nombre = $autor_nombre['nombre_autor'];
                    echo "<label for='autor_id' class='form-label'>Autor del Libro </label>";
                    echo "<input type='text' class='form-control' name='autor_id'  value=' $nombre ' readonly>";
                    desconectar($conexion);
                ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="anio" class="form-label">Año de creación</label>
            <input type="number" class="form-control" name="anio" value="<?php echo $anio ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input type="text" class="form-control"name="especialidad" value="<?php echo $especialidad ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="editorial" class="form-label">Editorial</label>
            <input type="text" class="form-control"name="editorial" value="<?php echo $editorial ?>"readonly >
        </div>
        <div class="mb-3">
            <label for="url" class="form-label">URL</label>
            <input type="text" class="form-control"name="url" value="<?php echo $url ?>" readonly >
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   
            <button class="btn btn-outline-primary" type="submit">Eliminar</button>
            <a class="btn btn-outline-danger" type="button" href="read_libro.php">Cancelar</a>

    </div>
</body> 
</html>
