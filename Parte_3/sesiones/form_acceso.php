<!DOCTYPE html>
<html lang="en">

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

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_form.css">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
            <label>Usuario: </label>
            <input type="email" name= "correo"><br><br>

            <label>Contraseña: </label>
            <input type="password" name= "password"><br>

            <input type="submit" name="enviar" value="ENVIAR"><br><br>
    </div>

    </form>
    
</body>
</html>