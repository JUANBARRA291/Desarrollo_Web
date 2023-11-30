<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECCIONAR IDIOMA</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        text-align: center;
    }

    h2 {
        color: #333;
        padding: 30px;

    }

    a {
        text-decoration: none;
        color: #007bff;
    }

    img {
        border: 5px solid #fff;
        border-radius: 8px;
        margin: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
</style>

<body>
    <H2>SELECCIONE UN IDIOMA PARA LA VISUALIZACION DEL CONTENIDO</H2>
    <td align="center"><a href="creaCookie.php?idioma=sp"><img src="https://elcomercio.pe/resizer/Aaxg5b-L6NxOTs3TmQ0a8XbPbWc=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/XOQQKTCLDRD4XHV5GVPPTGT4QE.jpg"
    width="240" height="200"border="5"></a></td>
    <td align="center"><a href="creaCookie.php?idioma=en"><img src="https://imagenes.laestrella.com.pa/files/content_image/uploads/2023/01/30/63d8562709404.jpeg"
    width="240" height="200"border="5"></a></td>
</body>
</html>

<?php
if (isset($_COOKIE["sel_idioma"])) {
    
    if($_COOKIE["sel_idioma"]=="sp"){

        header("Location:pag_español.php");
    }else if ($_COOKIE["sel_idioma"]=="en") {
        header("Location:pag_ingles.php");
    }
}
?>