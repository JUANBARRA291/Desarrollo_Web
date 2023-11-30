<!DOCTYPE html>
<html lang="en">
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

                <input type="checkbox" name= "recordar">
                <label>Recordarme en este equipo</label><br><br>

            <input type="submit" name="enviar" value="ENVIAR"><br><br>
    </div>

    </form>
    
</body>
</html>