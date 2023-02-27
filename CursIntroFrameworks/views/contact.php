<?php
 // Creando la lógica en el mismo archivo, aunque perfectamente puede estar en otro archivo separado

 // Status: Permite guardar un estado para más adelante mostrar una alerta si el correo es enviado o no
    $status = "";
    
  // Comprobamos si el formulario no se envío vacío
    function validate($name,$email,$subject,$message){
        return !empty($name) && !empty($email) && !empty($subject) && !empty($message);
    }

 // Comprobamos si el formulario fue enviado
    if(isset($_POST["form"])){ 
        // Invocamos función para validar y con el unpacking array le pasamos los parametros solicitados a la función, en mi caso no funciono asi que paso manualmente los parametros;
        if(validate($_POST["name"],$_POST["email"],$_POST["subject"],$_POST["message"])){ #...$_POST
            // Sanitizando los datos
            $name = htmlentities($_POST["name"]);
            $email = filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
            $subject = htmlentities($_POST["subject"]);
            $message = htmlentities($_POST["message"]);

            $status = "success";
        }else{
            $status = "fail to load reasources";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Css/style.css">
    <title>Formulario de contacto</title>
</head>
<body> 
    <?php if($status == "fail to load reasources"): ?>
        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>
    <?php endif; ?>

    <?php if($status == "success"): ?>
        <div class="alert success">
            <span>¡Mensaje enviado con éxito!</span>
        </div>
    <?php endif; ?>
    

    <form action="./" method="POST" enctype="multipart/form-data">

        <h1>¡Contáctanos!</h1>

        <div class="input-group">
            <label for="name">Nombre:</label>
            <input type="text" name="name" id="name">
        </div>

        <div class="input-group">
            <label for="email">Correo:</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="input-group">
            <label for="subject">Asunto:</label>
            <input type="text" name="subject" id="subject">
        </div>

        <div class="input-group">
            <label for="message">Mensaje:</label>
            <textarea name="message" id="message"></textarea>
        </div>

        <div class="button-container">
            <button name="form" type="submit">Enviar</button>
        </div>

    </form>

    <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
    
</body>
</html>