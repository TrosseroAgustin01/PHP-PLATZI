<?php
#require("resources/CharactersCreator.php");
require_once("vendor/autoload.php");
/* use Db\db;
use Controllers\CharactersController; */
use Resources\CharactersFunctions;

$peticion = new CharactersFunctions;
$peticion->mirror();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <title>home</title>
</head>
<body>
    <h1>List of Characters</h1>
    <?php foreach ($results as $res): ?>
        <div class="card">
            <h3>Name: <?= $res["name"]  ?> </h3>
            <img src=<?= $res["image"] ?> alt="nada">
            <h3>Status: <?= $res["status"]  ?> </h3>
            <h3>Gender: <?= $res["species"]  ?> </h3>
            
        </div>
    <?php endforeach; ?>
</body>
</html>