<?php
require_once 'C:\xampp\htdocs\prueba\CursPooPhp\alcance-o-encapsulamiento\abstract\base.php';

class Cached extends Base
{
    public function get($name)
    {
        if(!empty($name)){
            return "Bienvenido señor $name";
        }else{
            return "No reconocemos ese $name rey";
        }
    }
    public function store(){
        return 'store is set';
    }
}

$aux = new Cached;
echo $aux->get('briyan')."\n";
echo $aux->store();