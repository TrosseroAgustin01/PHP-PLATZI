<?php

// require("Classes/Michi.php");
require_once("Logic/CreateMascota.php");

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
    
    <h3>Mascotas Disponibles:</h3>

    <ul>
        <li><?= $mrmichi->getName() ?> su edad es: <?= $mrmichi->getAge() ?></li>
        <li><?= $michisancio->getName() ?> su edad es: <?= $michisancio->getAge() ?></li>
        <li><?= $michales->getName() ?> su edad es: <?= $michales->getAge() ?></li>
    </ul>

    <h3>Mascotas Adoptadas:</h3>

    <ul>
        <li><?= $mrmichi_adopted->getName() ?> fue adoptado por: <?= $mrmichi_adopted->getAdopted_by() ?></li>
        <li><?= $michisancio_adopted->getName() ?> fue adoptado por: <?= $michisancio_adopted->getAdopted_by() ?></li>
        <li><?= $michales_adopted->getName() ?> fue adoptado por: <?= $michales_adopted->getAdopted_by() ?></li>
    </ul>

</body>
</html>