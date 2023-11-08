<?php
$db_host = "localhost";
$db_nombre = "usuarios";
$db_usuario = "root";
$db_contra = "";

$conexion = mysqli_connect($db_host, $db_usuario, $db_contra);
mysqli_select_db($conexion, $db_nombre) or die ("NO SE ENCUENTRA LA BASE DE DATOS");

if (mysqli_connect_errno()) {
    echo "LA CONEXION CON LA BASE DE DATOS HA FALLADO";
    exit();
}

//$consulta = "SELECT * FROM PRODUCTOS WHERE SECCION = 'CERAMICA'";
//$resultado = mysqli_query($conexion, $consulta);

 //   while($fila = mysqli_fetch_assoc($resultado)) {
 //   $fila = mysqli_fetch_row($resultado);
 //   echo"".$fila[0]." ";
 //   echo "".$fila[1]." ";
 //   echo "".$fila[2]." ";
 //   echo "".$fila[3]." ";
 //   echo "".$fila[4]." ";
 //   echo "".$fila[5]." ";
 //   echo "<br>";
//}