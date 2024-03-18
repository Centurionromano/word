<?php

ini_set('display_errors', 1);

$imagen = $_GET['imagen'];

if (unlink('images/' . $imagen)) {
    echo "<h1>Imagen eliminada correctamente</h1>";
    header("Refresh:5; URL=index.php");
} else {
    echo "<h1>Error al eliminar la imagen</h1>";
    header("Refresh:5; URL=index.php");
}

?>