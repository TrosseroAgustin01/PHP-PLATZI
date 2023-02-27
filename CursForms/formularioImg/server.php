<?php

$basename = $_FILES["image"]["name"];  # nombre de la imagen
$image = $_FILES["image"]["tmp_name"]; #imagen guardada
$ruta_a_subir = "images/$basename"; #esta es la ruta de la imagen
$tipo_archivo = $_FILES["image"]["type"]; #tipo de imagen
$error_de_carga = $_FILES["image"]["error"]; #error
$partes_archivo = explode(".",$basename);
$extension_archivo=strtolower(end($partes_archivo));
$extensiones_permitidas=["jpg","png","svg","ico"];
/*
echo "<pre>";
var_dump($_FILES);
var_dump($extension_archivo);
echo "</pre>";
*/

//Validamos si hubo algun error al cargar el archivo
if ($error_de_carga == UPLOAD_ERR_OK)
{
    //Validamos que sea un tipo de archivo permitido
    if (in_array($extension_archivo,$extensiones_permitidas))
    {
        //Copiamos la imagen a la carpeta del servidor
        if (move_uploaded_file($image, $ruta_a_subir)){     #move_uploaded_file--> esta funcion nos permite guardar la imagen que subimos al servidor en una carpeta determinada,
            $mensaje = "Imagen subida correctamente";       # esta, recibe dos parametros, primero la imagen y en segundo lugaar recibe la ruta donde queremos que se almacene;
        }else{
            $mensaje= "Huston tuvimos un problema - Verifica que tengas permisos para manipular el servidor ";
        }
    }else{
        $mensaje = "Huston tuvimos un problema - Extensión no valida <br>
                    Extensiones validas (".implode(',', $extensiones_permitidas).")";
    }
}else{
    $mensaje="¡Ups! algo salio mal - $error_de_carga";
}

// $basename = isset($_FILES["image"]["name"])? $_FILES["image"]["name"]: 'no image';
// $nombre = isset($_POST["nombre"])? $_POST["nombre"] :"no name";

// echo $basename . "\n" . $nombre;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h2><?= $mensaje ?></h2>
    <img src="<?= $ruta_a_subir ?>" alt="<?= $basename ?>"> <!-- aqui llamamos a php para poder definir la fuente de la imagen y en caso de que falle aue devuelva en nombre de la misma -->

</body>
</html>