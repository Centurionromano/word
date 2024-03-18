<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Curso PHP</title>
</head>



<body>
   
<?php
session_start();

if (isset($_SESSION["correo"]))
?>

<p>Hola, <?=$_SESSION['correo']?></p>






    
    <button><a href='index.html'>Volver al formulario</a></button>
    <button><a href='index.php'>Subir imagen</a></button>

</body>


</html>