<?php 
session_start();

$users = [

    array(
        "username" => "Retaxito",
        "email" => "retaxito@noesmiemail.com"
    ),

    array(
        "username" => "Mr.Michi",
        "email" => "mrmichi@noesmiemail.com"
    ),

];

$user = $_GET["user"] ?? "";
#echo "el usuario se logeo con el perfil {$users[$user]["username"]}";
$_SESSION["id"] = $user;
$_SESSION["username"] = $users[$user]["username"];
$_SESSION["email"] = $users[$user]["email"];
?>