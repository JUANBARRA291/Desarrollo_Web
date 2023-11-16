<?php

        require("conexion.php");
        
        $conexion=mysqli_connect($host, $db_usuario, $db_contra, $db_nombre);

        if(mysqli_connect_errno())
        {
            echo "". mysqli_connect_error();
            exit();
        }

        mysqli_select_db($conexion, $dbname) or die("LA BASE DE DATOS NO EXISTE");

        $consulta = "SELECT * FROM productos WHERE producto LIKE '%$laconsulta%'";
        $resultado = mysqli_query($conexion, $consulta);

        mysqli_close($conexion);

?>