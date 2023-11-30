<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleblog1.css">
    <title>Blog de MotoGP</title>
</head>
<body>
    <?php
    if(isset($_POST["enviar"])){

        try {
                $base=new PDO("mysql:host=localhost;dbname=usuarios", "root", "");
                $base->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                $sql="SELECT * FROM datos_usuario WHERE usuario= :login AND PASSWORD= :password";
                $resultado=$base->prepare($sql);
                $login=htmlentities(addslashes($_POST["correo"]));
                $password=htmlentities(addslashes($_POST["password"]));
                $resultado->bindValue(":login",$login);
                $resultado->bindValue(":password",$password);
                $resultado->execute();
                $numero_registro=$resultado->rowCount();
                //validar que la consulta fue exitosaen caso "true" activar una sesion para ese usuario
                if($numero_registro!=0){
                    //iniciar la sesion del usuario
                    session_start();
                    $_SESSION["usuario"]=$_POST["correo"];
                    //header("Location: pag_inicio.php");
                }else{
                    //header("Location: form_acceso.php");
                    echo"LOS DATOS DE USUARIO SON INCORRECTOS";
                }
    
        }//validando si el servidor no conecta le saldra de la ejecucion marca los errores de conexion
        catch(Exception $e){
            die("Error: ". $e->getMessage());
        }
    }

    ?>
<header>

        <h1 align="center">EL BLOG DE LAS FLORES</h1>
    <?php
        //validar si se ha iniciado una sesion debe incluir el formulario
        if(!isset($_SESSION["usuario"])){
        include("form_acceso.php");
        }else{
        echo "BIENVENIDO AL SISTEMA" . $_SESSION["correo"];
        }
    ?>

</header>

    <nav>
        <a href="#">Inicio</a> |
        <a href="#">Noticias</a> |
        <a href="#">Resultados</a> |
        <a href="#">Galería</a>
    </nav>

    <main>
        <article>
            <h2>Título del Artículo</h2>
            <p>Fecha: 30 de noviembre de 2023</p>
            <img src="imagen.jpg" alt="Imagen del artículo">
            <p>Contenido del artículo...</p>
        </article>

        <!-- Agrega más artículos según sea necesario -->
    </main>

    <footer>
        <p>&copy; 2023 Blog de MotoGP</p>
    </footer>

</body>
</html>