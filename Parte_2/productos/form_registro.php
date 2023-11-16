<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>AGREGAR PRODUCTOS</title>
</head>
<body>
    <h1 class="titulo">GESTION DE PRODUCTOS</h1>
    <div class="main content">
    <form class="form-reg" method="post" action="insertar_productos.php">
        <div class="form-tittle-row">
            <h1>Agregar Productos</h1>
        </div>
        <div class="form-row">
            <label>Codigo Productos</label>
            <input type="text" name="c_prod" id="c_prod">
        </div>
        <div class="form-row">
            <label>Seccion</label>
            <input type="text" name="seccion" id="seccion">
        </div>
        <div class="form-row">
            <label>Nombre Producto</label>
            <input type="text" name="n_prod" id="n_prod">
        </div>
        <div class="form-row">
            <label>Pais de Origen</label>
            <input type="text" name="p_orig" id="p_orig">
        </div>
        <div class="form-row">
            <label>El Producto es importado</label>
            <select name="importado" id="importado">
                <option>VERDADERO</option>
                <option>FALSO</option>
            </select>
        </div>
        <div class="form-row">
            <label>Precio del producto</label>
            <input type="text" name="precio" id="precio">
        </div>
        <div class="form-row">
        <input type="submit" name="enviar" id="enviar" value="ENVIAR">
        <input type="reset" name="borrar" id="borrar" value="LIMPIAR FORMULARIO">
        </div>
    </form>
</div>
</body>
</html>