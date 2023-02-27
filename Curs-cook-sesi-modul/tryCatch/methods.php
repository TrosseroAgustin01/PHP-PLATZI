<?php

function caminito2() {
    return 20 / 0;
}

function caminito() {
    return caminito2();
}

function division() {
    return caminito();
}

try {
    
    $resultado = division();
    echo $resultado;

} catch (Throwable $e) {

    // echo $e->getMessage(); ->Obtiene el mensaje de Excepción
    // echo $e->getCode();    ->Obtiene el código de una excepción
    // echo $e->getFile();    ->Obtiene el fichero en el que se creó la excepción
    // echo $e->getLine();    ->Obtiene la línea en el que se creó la excepción
    // $e->getTraceAsString() ->Obtiene la traza de la pila como una cadena de caracteres
    echo "<pre>";
    var_dump($e->getTrace()); #->Obtiene la traza de la pila
    echo "</pre>";

}

