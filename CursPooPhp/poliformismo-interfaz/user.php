<?php
require_once "./base.php";

class User implements Search
{
    public function all()
    {
        return "Obteniendo a los Users, XML";
    }
}


?>