<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Proceso Lab 05</title>
</head>
<body>
    <div class="container col-4">
    <br><hr>
    <h2>Resultados:</h2>
    <?php
        function funcion1(){
        if(isset($_POST['importe']) && isset($_POST['hijos'])) {
            $importe = $_POST['importe'];
            $hijos = $_POST['hijos'];
            $sueldo_basico = 600;
            $bonificacion = $hijos * 50;
            $comision = $importe * 0.075;
            $sueldo_bruto = $sueldo_basico + $comision + $bonificacion;
            $descuento = $sueldo_bruto * 0.11;
            $sueldo_neto = $sueldo_bruto - $descuento;
            //Nuevo titulo de la página
            $nuevoTitulo='Sueldo del vendedor';
            echo '<script>document.title = "'.$nuevoTitulo.'";</script>';
            //Muestra de los resultados
            echo "<p>Bonificación por hijos en edad escolar: S/. " . number_format($bonificacion, 2) . "</p>";
            echo "<p>Comisión: S/. " . number_format($comision, 2) . "</p>";
            echo "<p>Sueldo bruto: S/. " . number_format($sueldo_bruto, 2) . "</p>";
            echo "<p>Descuento: S/. " . number_format($descuento, 2) . "</p>";
            echo "<p>Sueldo neto: S/. " . number_format($sueldo_neto, 2) . "</p>";  
		}}
        function funcion2() {
        if(isset($_POST['precio']) && isset($_POST['cantidad'])) {
            $precio_actual = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $descuento_5_porcentaje = $precio_actual * 0.05;
            $nuevo_precio = $precio_actual - $descuento_5_porcentaje;
            $importe_compra = $nuevo_precio * $cantidad;
            $descuento_7_porcentaje = $importe_compra * 0.07;
            $importe_a_pagar = $importe_compra - $descuento_7_porcentaje;
            $obsequio = $cantidad * 2;
            //Nuevo titulo de la página
            $nuevoTitulo='Precio de gaseosas';
            echo '<script>document.title = "'.$nuevoTitulo.'";</script>';
            //Muestra de los resultados
            echo "<p>Precio rebajado de la gaseosa de 3 litros: S/. " . number_format($nuevo_precio, 2) . "</p>";
            echo "<p>Importe de la compra: S/. " . number_format($importe_compra, 2) . "</p>";
            echo "<p>Descuento especial del 7%: S/. " . number_format($descuento_7_porcentaje, 2) . "</p>";
            echo "<p>Importe a pagar: S/. " . number_format($importe_a_pagar, 2) . "</p>";
            echo "<p>Obsequio de caramelos: " . $obsequio . "</p>";
        }}
        function funcion3() {
        if(isset($_POST['tarifa']) && isset($_POST['dias'])) {
            $tarifa = $_POST['tarifa'];
            $dias = $_POST['dias'];
            $importe_bruto = $tarifa * $dias;
            $descuento = $importe_bruto * 0.15;
            $importe_neto = $importe_bruto - $descuento;
            $lapiceros_obsequio = $dias * 3;
            //Nuevo titulo de la página
            $nuevoTitulo='Alquiler de automóviles';
            echo '<script>document.title = "'.$nuevoTitulo.'";</script>';
            //Muestra de los resultados
            echo "<p>Importe bruto: S/. " . number_format($importe_bruto, 2) . "</p>";
            echo "<p>Descuento promocional del 15%: S/. " . number_format($descuento, 2) . "</p>";
            echo "<p>Importe neto a pagar: S/. " . number_format($importe_neto, 2) . "</p>";
            echo "<p>Lapiceros de obsequio: " . $lapiceros_obsequio . "</p>";
        }}
        function funcion4() {
        if(isset($_POST['precio']) && isset($_POST['cantidad'])) {
            $precio = $_POST['precio'];
            $cantidad = $_POST['cantidad'];
            $importe_compra = $precio * $cantidad;
            $descuento1 = $importe_compra * 0.05;
            $importe_compra_desc1 = $importe_compra - $descuento1;
            $descuento2 = $importe_compra_desc1 * 0.05;
            $importe_total_descuentos = $descuento1 + $descuento2;
            $importe_pagar = $importe_compra - $importe_total_descuentos;
            //Nuevo titulo de la página
            $nuevoTitulo='Venta de conos de CD';
            echo '<script>document.title = "'.$nuevoTitulo.'";</script>';
            //Muestra de los resultados
            echo "<p>Importe de la compra: S/. " . number_format($importe_compra, 2) . "</p>";
            echo "<p>Descuento del 5% en el importe de la compra: S/. " . number_format($descuento1, 2) . "</p>";
            echo "<p>Importe de la compra con el primer descuento aplicado: S/. " . number_format($importe_compra_desc1, 2) . "</p>";
            echo "<p>Descuento del 5% en el importe de la compra con el primer descuento aplicado: S/. " . number_format($descuento2, 2) . "</p>";
            echo "<p>Importe total de descuentos: S/. " . number_format($importe_total_descuentos, 2) . "</p>";
            echo "<p>Importe a pagar: S/. " . number_format($importe_pagar, 2) . "</p>";
        }}
    ?>
    <?php
    //switch case para que cada botón del form en el "index.html active una funcion cada uno.
    if(isset($_POST['boton'])) {
    switch($_POST['boton']) {
        case '1':funcion1();break;
        case '2':funcion2();break;
        case '3':funcion3();break;
        case '4':funcion4();break;
    }}
    ?>
    <a class='btn btn-success' href='index.html'>Volver al index</a>
</div>
</body>
</html>