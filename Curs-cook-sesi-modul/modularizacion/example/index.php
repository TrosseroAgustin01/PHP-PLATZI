<?php

/* include("constantes.php");
echo PROFESION; */

/* include("constants.php");
echo "Sigue funcionando"; */ #funciona pero da warnings

/* require("constants.php");
echo "Ya no funcionar"; */ # requiere es mas extricto , no va a funcionar,se detiene el programa.

/* include("constantes.php"); 
include("constantes.php");
echo PROFESION; */

#el includes es igual a directamente traernos el archivo, es como si copiariamos el archivo que buscamos por eso es mejor no usar dos includes que apunten al mismo archivo y usar,
# include_once;

include_once("constantes.php");
include_once("constantes.php");
echo PROFESION;