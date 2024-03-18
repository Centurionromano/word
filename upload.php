<?php
ini_set('display_errors', 1);

/* 
Las siguientes cuatro lineas obtienen la información del 
archivo subido a través del formulario:  
*/

//Contiene un array con información del archivo
$archivo  = $_FILES['archivo'];
//El nombre original del archivo
$nombre   = $_FILES['archivo']['name'];
//El tipo MIME del archivo (por ejemplo, image/jpeg)
$tipo     = $_FILES['archivo']['type'];
//La ubicación temporal del archivo en el servidor.
$temp_dir = $_FILES['archivo']["tmp_name"];


if($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/git"){


    if(!is_dir('images')){
        mkdir('images', 0755);
    } 


    move_uploaded_file($temp_dir, 'images/'.$nombre);

    header("Refresh:5; URL=index.php");
    echo "<h1>Imagen subida correctamente<h1>";

  
} else {
    header ("Refresh:5; URL=index.php");
    echo "<h1>Sube una imágen con un formato correcto jpg, jpeg, git</h1>";
}




?>