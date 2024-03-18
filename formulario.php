
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form method="post" action="formulario.php">
        Correo Electrónico: <input type="email" name="new_user" required><br>
        Contraseña: <input type="password" name="new_password" required><br>
        <input type="submit" value="Registrar">
    </form>
    <footer>
        <button><a href="index.html">Regresar</a></button>
    </footer>
</body>
</html>


<?php
// obtener nuevo usuarios y contraseñas nuevo
$new_user = $_POST["new_user"];
$new_password = $_POST["new_password"];

if(isset($new_user) && isset($new_password)){
    // Cargar y decodificar el archivo JSON
    $archivo = "usuarios.json";
    $json = file_get_contents($archivo);
    $usuarios_json = json_decode($json, true);

    //validar si el usuario es nuevo
    $es_nuevo = true;
    foreach ($usuarios_json as $user) {
        if ($user["email"] === $new_user && $user["password"] === $new_password) {
            $es_nuevo = false;
            break;
        }
    }

    // si no es nuevo manda el mensaje y se termina la ejecucion 
    if(!$es_nuevo){
        echo "<h1>El usuario ya existe</h1>";
        echo "<p><a href='formulario.php'>Volver al formulario</a></p>";
        return;
    }

    // se agrega el nuevo usuario al arreglo de usuarios
    array_push($usuarios_json,  [ "email" => $new_user, "password" => $new_password]);
    // transformamos el array a formato json
    $new_json = json_encode($usuarios_json);
    $archivo = "./usuarios.json";
    //guarda el string en formato json en el archivo (se necesitan permisos en el archivo)
    file_put_contents($archivo, $new_json);

    echo "<h1>Usuario registrado de forma correcta</h1>";
    echo "<p><a href='index.html'>Volver al formulario</a></p>";
}
?>



