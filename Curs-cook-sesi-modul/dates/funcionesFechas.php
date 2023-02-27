<?php 
    
//Establecer la zona horaria
date_default_timezone_set("America/Argentina/Buenos_Aires");

//Obtener la fecha actual
 $now = date("d/m/Y H:i:s");

# echo $now;
//strtotime Convierte una descripción de fecha/hora textual en Inglés a una fecha Unix
//echo strtotime($now);
//echo strtotime("17 april 2020");
//echo strtotime("+1 day");
//echo strtotime("next Monday");
//echo strtotime("last Wednesday");

/* $unix_time_last_wednesday = strtotime("+1 week");
echo date("d/m/Y H:i:s", $unix_time_last_wednesday); */ #al pasarle a la funcion date un segundo parametro q es una fecha unix,la tramsforma a una fecha con el formato que decidamos

//Fechas inmutables
//$date_inmutable = new DateTimeImmutable();
/* 
La característica curiosa de DateTimeImmutable es que a diferencia de DateTime no se modifica a sí misma sino que nos retorna un nuevo objeto. 
Por ejemplo si usamos add con DateTime esta modificará la instancia, por el contrario con DateTimeImmutableno se modifica sino que nos da un nuevo objeto para trabajar 
dejandonos la fecha original */

//Diferencia de tiempo
/* 
$today = new DateTime();
$myBirth =  new DateTime("2001-08-31");
$interval = $myBirth->diff($today);
echo $interval->format("%y años, %m meses, %d días");  */


// Crear desde un formato dado

/* $date = DateTime::createFromFormat("l j F y", "Sunday 17 April 2022"); 
echo $date->format("Y-m-d H:i:s");  */

/* las letras que conforman el primer argumento de la funcion "DateTime::createFromFormat" estan definidos en la documentacion para lograr,
formatear la fecha literal que pasamos como segundo argumento de la funcion. */

//Modificar una fecha
$date = new DateTime();
$date->modify("+1 day");
echo $date->format("Y-m-d H:i:s");

?>

