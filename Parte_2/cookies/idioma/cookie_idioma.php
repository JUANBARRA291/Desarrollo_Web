<?php
if (!$_COOKIE["sel_idioma"]) {
    header("Location:seleccionidioma.php");
}

else if ($_COOKIE["sel_idioma"]=="sp") {
    header("Location:pag_español.php");
}

else if ($_COOKIE["sel_idioma"]=="en") {
    header("Location:pag_ingles.php");
}
