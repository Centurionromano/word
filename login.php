<?php

session_start();

//Verificamos que se haya mandado la información desde el formulario
if(isset($_POST["correo"]))
{//en caso de ser así se manda el valor enviado
    //al indice usuario del arreglo $_SESSION
    $_SESSION["correo"]=$_POST["correo"];
}

// Cargar y decodificar el archivo JSON
$archivo = "usuarios.json";
$json = file_get_contents($archivo);
$usuarios_json = json_decode($json, true);

// Obtener correo y contraseña del formulario de inicio de sesión1
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

// Validar si el usuario existe
$usuarioValido = false;
foreach ($usuarios_json as $user) {
    if ($user["email"] === $correo && $user["password"] === $contrasena) {
        $usuarioValido = true;
        break;
    }
}

// // Mensaje de respuesta
if ($usuarioValido) {
    header("Location: usuario.php");
} else {
    echo "<h1> contraseña incorrecta</h1>";
    echo "<p>El correo electrónico o la contraseña son incorrectos.</p>";
    echo "<p><a href='index.html'>Volver al formulario</a></p>";
}
?>