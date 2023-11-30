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

    $id=$_POST["c_prod"];
    $sec=$_POST["seccion"];
    $prod=$_POST["n_prod"];
    $org=$_POST["p_orig"];
    $imp=$_POST["importado"];
    $prec=$_POST["precio"];

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    if(mysqli_connect_errno())
    {
        echo "". mysqli_connect_error();
        exit();
    }

    mysqli_select_db($conexion, $db_nombre) or die("LA BASE DE DATOS NO EXISTE");

    $consulta = "INSERT INTO productos(id_producto, seccion, producto, origen,
     importado, precio) VALUES('$id', '$sec', '$prod', '$org', '$imp', '$prec')";

    $resultado = mysqli_query($conexion, $consulta);    
    
    if($resultado==false)
    {
        echo "ERROR DE EJECUCUON";
    }
    else
    {
        echo "EL PRODUCTO FUE ALMACENADO CORRECTAMENTE CON LOS SIGUIENTES DATOS: <br><br><br>";
        echo "CODIGO: " . "$id"."<br>";
        echo "SECCION: " . "$sec"."<br>";
        echo "PRODUCTO: " . "$prod"."<br>";
        echo "PAIS DE ORIGEN" . "$org"."<br>";
        echo "ES IMPORTADO?: " . "$imp"."<br>";
        echo "PRECIO: " . "$prec"."<br>";
    }

    mysqli_close($conexion);
    ?>
    
</body>
</html>