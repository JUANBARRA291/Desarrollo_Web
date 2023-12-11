<!DOCTYPE html>
<html lang="es">

<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    include("form_acceso.php");
} else {
    echo "BIENVENIDO EL SISTEMA ". $_SESSION["usuario"];
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleblog1.css">
    <title>Blog de MotoGP</title>
</head>
<body>

<header>

        <h1 align="center">EL BLOG DE LAS FLORES</h1>

</header>

    <nav>
        <ul>
            <li class="selected"><a href="#">Blog</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Archivos</a></li>
            <li><a href="#">Contacto</a></li>
            <li class="subscribe"><a href="#">Subscribe via. RSS</a></li>
        </ul>
    </nav>

    <main>
        <article>
            <h2>Título del Artículo</h2>
            <p>Fecha: 30 de noviembre de 2023</p>
            <img src="imagen.jpg" alt="Imagen del artículo">
            <p>Contenido del artículo...</p>
        </article>

    </main>

    <footer>
        <p>&copy; 2023 Blog de MotoGP</p>
    </footer>

</body>
</html>