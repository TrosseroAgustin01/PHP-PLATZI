<?php

$name = $_POST["nombre"];
$username = $_POST["username"];
$email = $_POST["email"];
$age = $_POST["age"];

$htmlentities = htmlentities($name);
$addslashes = addslashes($username);
$onlywords = preg_replace("/\d/", "", $username);
$onlynumbers = preg_replace("/\D/", "", $username);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$sanitize_int = filter_var($age, FILTER_SANITIZE_NUMBER_INT);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de mi usuario</title>
</head>
<body>

    <p>Nombre:</p>
    <?= $htmlentities ?>

    <p>Username:</p>
    <?= $addslashes ?>

    <p>Username sin numeros:</p>
    <?= $onlywords ?>

    <p>Username sin letras:</p>
    <?= $onlynumbers ?>

    <p>Email:</p>
    <?= $email ?>

    <p>Edad:</p>
    <?= $sanitize_int ?>
    
</body>
</html>

<!-- Hay varias maneras de sanitizar datos de formulario en PHP para evitar ataques de inyección de código y proteger la seguridad de la aplicación. Algunas opciones:

Utilizar la función htmlspecialchars(): esta función convierte caracteres especiales en entidades HTML, evitando así que se interpreten como código.
Por ejemplo: $name = htmlspecialchars($_POST[‘name’]);

Utilizar la función strip_tags(): esta función elimina todas las etiquetas HTML y PHP de una cadena, lo que impide que se ejecute código malicioso.
Por ejemplo: $comment = strip_tags($_POST[‘comment’]);

Utilizar la función intval(): esta función convierte una variable en un entero y elimina cualquier valor no numérico.
Por ejemplo: **$id = intval($_POST[‘id’]);
**

Utilizar la función filter_var(): esta función permite filtrar una variable a través de diferentes tipos de filtros, como filtros de correo electrónico, URL o entero. 
Por ejemplo: $email = filter_var($_POST[‘email’], FILTER_SANITIZE_EMAIL);

Utilizar expresiones regulares: las expresiones regulares (regex) son una herramienta muy potente para validar y sanitizar datos de formulario. 
Por ejemplo, para permitir solo números y letras en un campo de texto, se puede utilizar la siguiente expresión regular: /^[a-zA-Z0-9]+$/

Es importante tener en cuenta que la sanitización de datos no es suficiente en sí misma para proteger la aplicación de ataques de inyección de código. 
También es necesario validar los datos de formulario para asegurarse de que cumplen con los requisitos de la aplicación y utilizar consultas preparadas y 
parámetros con marcadores para proteger las consultas a la base de datos. -->