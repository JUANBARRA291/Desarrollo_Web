<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
</head>
<body>
    <?php

    require("conexion.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if(mysqli_connect_errno())
    {
        echo "". mysqli_connect_error();
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("LA BASE DE DATOS NO EXISTE");

    $consulta = "INSERT INTO productos(id_producto, seccion, producto, origen,
     importado, precio) VALUES('ar39', 'FERRETERIA', 'pela cables', 'Colombia',
      'FALSO', 10000)";
    $resultado = mysqli_query($conexion, $consulta);

    mysqli_close($conexion);
    ?>
    
</body>
</html>

