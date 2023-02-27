<?php

require_once("./Resources/CharactersFunctions.php");

$aux = mirror();

function search($array,$string){
    for($i=0;$i< count($array);$i++){
        $arr = strtolower($array[$i]["name"]);
        $str = strtolower($string);
        if(str_contains($arr ,$str)){
            return $arr;
        };
    }
}
/* <button onclick=<?=header('location:http://127.0.0.1/prueba/RyM-Crud/index.php?id='."{$res["id"]}".'')?>></button> */
/* function redirec($id){
    header("location:http://127.0.0.1/prueba/RyM-php-Puro/detail.php?id={$id}");
} */
/* <button onclick=<?= redirec($res["id"])?>></button> */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>home</title>
</head>
<body>
    <!-- <input type="text" placeholder="Serch for your Favorite Character" > --> <!-- value="input" -->
    <div class="group">      
      <input type="text" required placeholder="Serch for your Favorite Character">
      <span class="highlight"></span>
      <span class="bar"></span>
      <!-- <label>Serch for your Favorite Character</label> -->
    </div>
    <h1>List of Characters</h1>
    <div class="conteiner">
        <?php foreach ($aux as $res): ?>
            <div class="caja">
                <h3><?= $res["name"]  ?> </h3>
                <img src=<?= $res["image"] ?> alt="nada">
                <h3><?= $res["species"]  ?> </h3>
                <h3> <?= $res["status"]  ?> </h3>
                
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
