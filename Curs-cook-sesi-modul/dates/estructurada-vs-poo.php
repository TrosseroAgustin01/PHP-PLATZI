<?php

// Por procedimientos / estructurada / funciones
/* $interval = date_interval_create_from_date_string("5 days");
$date = date_create();
date_add($date, $interval);
echo date_format($date, "Y-m-d")."</br>";

print_r($interval)."</br>";
print_r($date); */
// POO
$interval = DateInterval::createFromDateString("5 days"); #-> la variable interval es equivalente a la funcion DateInterval la cual es una instamcia createFromDateString,
                                                            # esta nos permite agregar a la fecha actual un intervalo de tiempo extra.  
$date = new DateTime();
$date->add($interval);                                   #-> Aca vemos que la funcion add de la clase DateTime nos permite agregarle a la fecha actual,
                                                           # el resultado de nuestro intervalo;
echo $date->format("Y-d-m");

?>