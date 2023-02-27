<?php

try {

    $resultado = 20/0;
    echo $resultado;

} catch(Throwable $e) {

    // echo $e->getMessage();
    echo "¡Ups! Algo salió mal con tu división";
    echo "</br>";
    echo "el error es: ". $e->getMessage() . "</br>error linea:". $e->getLine();

}

echo "<br>";

#echo "Esto pasa sí o sí";