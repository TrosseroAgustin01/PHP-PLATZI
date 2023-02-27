<?php

$server = "localhost";
$database = "finanzas_personales";
$username = "root";
$password = "";

try {
        
    $connenction = new PDO("mysql:host=$server; dbname=$database", $username, $password);
    #$connenction->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $setnames = $connenction->prepare("SET NAMES 'utf8'");
    $setnames->execute();
    var_dump($setnames);

} catch (Exception $e) {

    die ("Ha ocurrido un error en la línea " . $e->getLine() . "<br>" . $e->getMessage());

} finally {

    $connenction = NULL;

}