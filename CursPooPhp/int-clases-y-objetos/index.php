<?php

// include
require_once './person.php';
require_once './user.php';
require_once './admin.php';

$usuario = new User;
$usuario->type = new Admin;
echo $usuario->type->greet();

?>