<?php
 require_once 'C:\xampp\htdocs\prueba\CursPooPhp\alcance-o-encapsulamiento\interface\storeInterface.php';
class Database implements Store
{
    public function get($name)
    {
        if(!empty($name)){
            return "Bienvenido señor $name";
        }else{
            return "No reconocemos ese $name rey";
        }
    }
}

$think= new Database;
echo $think->get('pedro');
