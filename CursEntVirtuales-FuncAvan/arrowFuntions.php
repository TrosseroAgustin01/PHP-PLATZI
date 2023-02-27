<?php

// Funcionan para leer variables del ámbito global.
/* $cajero = 10;
$add_cajero = fn($add) => $cajero + $add;
echo $add_cajero(20); */

// No funcionan para escribir variables en el ambito global.
/* $cajero = 10;
$add_cajero = fn($add) => $cajero += $add;
$add_cajero(20);
$add_cajero(40);
$add_cajero(4);
echo $cajero; */

$edades = [5, 21, 50, 9, 18];

/* $mayores_de_edad = array_filter($edades, function($current) {
    return $current >= 18;
}); */

$mayores_de_edad = array_filter($edades, fn($current) => $current >= 18);

print_r($mayores_de_edad);

echo "\n";

$pais= "arg";

$pais_soy = fn(&$pais) => $pais = "mex";
$pais_soy($pais);
echo "{$pais} \n"; 
/* $nums = [1,5,1,42,8,94,40];

function sumas ($nums){ 
    for($i = 0;$i < count($nums);$i++){
        $aux = $nums[$i] + $nums[$i + 1];
        return $aux;
    }
};

echo sumas($nums) . "\n"; */

#print_r($sum);