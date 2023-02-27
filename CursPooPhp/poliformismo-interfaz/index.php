<?php
require_once "./user.php";
require_once "./post.php";

$user = new User();
echo $user->all()."</br>";

$post = new Post();
echo $post->all();



?>