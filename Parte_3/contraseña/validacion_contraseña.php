<!DOCTYPE html>
<html lang="en">

<?php
function validar_clave($clave,&$error_clave){
    if(strlen($clave) < 6){
        $error_clave = "La contraseña debe tener al menos 6 caracteres";
        return false;
    }

    if(strlen($clave) > 16){
        $error_clave = "La contraseña no puede tener mas de 16 caracteres";
        return false;
    }

    if(!preg_match('`[a-z]`',$clave)){
        $error_clave = "La contraseña debe tener almenos una letra minuscula";
        return false;
    }

    if(!preg_match('`[A-Z]`',$clave)){
        $error_clave = "La contraseña debe tener almenos una letra mayuscula";
        return false;
    }

    if(!preg_match('`[0-9]`',$clave)){
        $error_clave = "La contraseña debe tener almenos un cararcter numerico";
        return false;
    }

    $error_clave = "";
    return true;
}

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="loggin-box">

    <h1>Registrate aqui</h1>
    <hr>
    <form id="myform" class="form-register" role="form" action="validacion_contraseña.php" method="POST" autocomplete="off">
        <div id="signupalert" style="display:none" class="alert alert-danger">
            <p>ERROR:</p>
            <SPan></SPan>
        </div>
        <div class="cont1">
            <div class="cont2">
                <div class="divicion1">
                    <div class="form-row">
                        <label for="FirstName">Nombre </label>
                        <input type="text" name="nombre" placeholder="Nombres" required>
                    </div>

                    <div class="form-row">
                        <label for="Apellido">Apellido </label>
                        <input type="text" name="apellido" placeholder="Apellidos..." required>
                    </div>

                    <div class="form-row" name="tipodocumento">
                        <label for="tpDco" for="tpDocumento">Tipo de Documento </label>
                        <select class="form_row" name="tpDocumento" 
                            value="<?php if (isset($tpDocumento)) echo $tpDocumento; ?>">
                            <option>Tarjeta de Identidad</option>
                            <option>Cedula de Ciudadania</option>
                            <option>Cedula de Extranjeria</option>
                            <option>Pasaporte</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <label for="cedula">N. Cedula </label>
                        <input type="text" name="cedula" placeholder="Numero de Cedula" required>
                    </div>

                    <div class="form-row">
                        <label for="email">Correo </label>
                        <input type="email" name="email" placeholder="Correo Electronico" required>
                    </div>

                    <div class="form-row">
                        <label for="password">Contraseña </label>
                        <input type="password" name="password" placeholder="contraseña" id="myPassword" required>
                    </div>
                    
                    <script>
                        $(document).ready(function ($) {

                            $('#myPassword', '').strength({
                                strengthClass: 'strength',
                                strengthMeterClass: 'strength_meter',
                                strengthButtonClass: 'button_strength',
                                strengthButtonText: 'Mostrar Contraseña',
                                strengthButtonTextToggle: 'Ocultar Contraseña'

                            });
                        });
                    </script>

                    <div>
                        <div class="form-row">
                            <input class="buttom" type="submit" name="registrar" value="Registrar">

                        </div>
                    </div>
                    

                </div>

            </div>
        </div>

    </form>

    <?php
    if(isset($_POST["registrar"])){
        $error_encontrado="";
        if (validar_clave($_POST["password"], $error_encontrado)){
            echo "CONTRASEÑA SEGURA";
        }else{
            echo "SU CONTRASEÑA ES INSEGURA: " . $error_encontrado;
        }
    }
    ?>

    </div>
</body>
</html>