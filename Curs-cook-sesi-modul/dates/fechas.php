<?php

setlocale(LC_ALL,"es_ES");
$string = "24/11/2014";
$date = DateTime::createFromFormat("d/m/Y", $string);
echo "hoy es : " . strftime("%A",$date->getTimestamp()). " ". date("d/m/Y") ;
/* 
Trabajar con fechas en PHP es muy facil, casi toda la magia la hace la funcion date. A esta funcion simplemente hay que pasarle un string con lo que queremos y magicamente nos da el dato

Pero tambien existe la clase DateTime, con esta clase podemos obtener varios metodos que nos permitan trabajar con fechas, todo está en la documentacion

date(string $format, int $timestamp = time()) : string

Documentacion: https://www.php.net/manual/es/function.date.php

    timestamp: El parametro opcional tiemstamp es una marca de unix de tipo integer que por defecto es la hora local si no se propporciona ningun valor a timestamp. En otras palabras, es de forma predeterminada el valor de la funcion time()

    DateInterval: nos ayuda a formatear un intervalo de tiempo, Representa un intervalo de fechas o una diferencia de fechas

    time: devuelve la fecha unix actual. Devuelve el momento actual medido como el número de segundos desde la Época Unix (1 de Enero de 1970 00:00:00 GMT).
 */