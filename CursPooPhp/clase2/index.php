<?php 
    include 'greet.php';
    
    echo greet('martin', 'como estas rey?');
    /*  Include **=> nos permite incluir un archivo dentro de otro. Sino lo encuentra solo genera un warning que permite continuar.
        Require **=> lo mismo que include pero más exigente, en caso de fallo producirá un error fatal, no permitirá continuar con el proceso.
        Require_once => idéntica a require excepto que PHP verificará si el archivo ya ha sido incluido y si es así, no se incluye. */
?>