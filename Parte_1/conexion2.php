<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>    
<body>
    <style>
        table
        {
        width:50%;
        border:1px dotted #0000FF;
        margin:auto;
        }
    </style>

        <?php

        require("conexion.php");

        $resultado = mysqli_query($conexion, "SELECT * FROM PRODUCTOS WHERE SECCION = 'CERAMICA'");

        while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            echo "<table><tr><td>";
            echo "<td>".$fila['id_producto']."</td><td>";
            echo "<td>".$fila['seccion']."</td><td>";
            echo "<td>".$fila['producto']."</td><td>";
            echo "<td>".$fila['origen']."</td><td>";
            echo "<td>".$fila['importado']."</td><td>";
            echo "<td>".$fila['precio']."</td><td>";
            echo "</table>";
        }
        ?>

</body>
</html>