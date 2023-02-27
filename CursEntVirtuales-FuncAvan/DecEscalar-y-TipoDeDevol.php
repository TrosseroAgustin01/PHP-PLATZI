<?php

class Calculator{
    function calcular_area_triangulo(int $base, int $altura, string $nombre) {
        return "¡Hola $nombre, el área de tu triángulo es " . ($base * $altura) / 2 . "!";
    }

    
    function calcular_area_triangulo2(int $base, int $altura):int{
        return ($base * $altura) / 2; 
    }
}

$aux = new Calculator;

echo $aux->calcular_area_triangulo(10,20,'lolero')."</br>";
echo $aux->calcular_area_triangulo2(24,31)."\n";
/* echo "<pre>";
error_reporting(E_ALL);
ini_set("display_errors", 1);
echo "</pre>"; */