<?php

require_once("../Controllers/CharactersController.php");

var_dump($_POST);

 // Creando la lógica en el mismo archivo, aunque perfectamente puede estar en otro archivo separado

 // state: Permite guardar un estado para más adelante mostrar una alerta si el correo es enviado o no
    $state = "";
  // Comprobamos si el formulario no se envío vacío
    function validate($nombre,$status,$gender,$image,$created){
        return !empty($nombre) && !empty($status) && !empty($gender) && !empty($image) && !empty($created);
    }

 // Comprobamos si el formulario fue enviado
    if(isset($_POST["form"])){ 
        // Invocamos función para validar y con el unpacking array le pasamos los parametros solicitados a la función, en mi caso no funciono asi que paso manualmente los parametros;
        if(validate($_POST["nombre"],$_POST["status"],$_POST["gender"],$_POST["image"],$_POST["created"])){ #...$_POST
            $state = "success";
        }else{
            $state = "fail to load reasources";
        }
    }

    function insert($data){
        try {
            foreach($data as $characters){
                $carga = new CharactersController;
                $carga->create([
                    #"id" => $characters["id"],
                    "name" => $characters["nombre"],
                    "status" => $characters["status"],
                    "gender" => $characters["gender"],
                    "image" => $characters["image"],
                    "created" => $characters["created"]
                ]);
                }
        } catch (\Throwable $th) {
            echo "el error es: ". $th->getMessage() . "\n error linea:". $th->getLine()."\n" ;
        }
        
    }

    insert($_POST);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="creator.css">
    <title>Form de Creacion</title>
</head>
<body>
    <?php if($state == "fail to load reasources"): ?>
        <div class="alert danger">
            <span>Surgió un problema</span>
        </div>
    <?php endif; ?>

    <?php if($state == "success"): ?>
        <div class="alert success">
            <span>¡Mensaje enviado con éxito!</span>
        </div>
    <?php endif; ?>



        <form action="#" method="POST" enctype="multipart/form-data" name="form">
            
            <h1>Create your own Character</h1>

            <div class="input-group">
                <label for="name">Name:</label>
                <input type="text" name="nombre" id="name">
            </div>
            <div class="input-group">
                <label>Select Status:</label>
                    <label for="alive">Alive</label>
                    <input type="radio" name="status" id="alive" value="alive"> 
                    <label for="dead">Dead</label>
                    <input type="radio" name="status" id="dead" value="dead">
                    <label for="unknow">Unknow</label>
                    <input type="radio" name="status" id="unknow" value="unknow">
            </div>
            <div class="input-group">
                <label>Select Gender:</label>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="other">Other</label>
                    <input type="radio" name="gender" id="other" value="other">
            </div>
            <div class="input-group">
                <label for="image">Image</label>
                <input type="url" name="image" id="image">
            </div>
            <div class="input-group">
                <label for="created">Date of Creation:</label>
                <input type="date" name="created" id="created">
            </div>
            <div class="button-container">
                <button name="form" type="submit">Submit Form</button>
            </div>

            </form>

            <script src="https://kit.fontawesome.com/bbff992efd.js" crossorigin="anonymous"></script>
</body>
</html>