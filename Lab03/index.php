<?php
$mensaje="Bienvenido a nuestra aplicación"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="estilos.css" rel="stylesheet">
        <title>Ingreso</title>
</head>
<body>
    <div id="login" class="container">
        <div class="row mt-3">
            <h1 ><?php echo $mensaje ?></h1>
            <h2>
                <?php
                echo "Desarrollo de Aplicaciones en Internet";
                ?>
            </h2>
            <div id="login" class="container">
            <div class="col-6 mt-5">
                <div class="card">
                    <div class="card-header bg-success">
                        <div class="card-title text-white">Login</div>
                    </div>
                    <div class="card-body">
                        <form id="formlogin" action="bienvenido.php" method="post">
                            <div class="form-group">
                                <label for="">Usuario:</label>
                                <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Ingrese su nombre de usuario:" required>
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Contraseña:</label>
                                <input id="password" name="password" type="password" class="form-control" placeholder="Ingrese su contreseña:" maxlength="4" required>
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-secondary col-12">Ingresar</button>
                            </div>
                            <div class="mt-3">
                                <p class="text-center">
                                    pista: Gabo  -  1234
                                </p>
                                <p id="mensaje" class="text-primary text-center"></p>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>