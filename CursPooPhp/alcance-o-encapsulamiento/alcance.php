<?php

class User
{
    #ESTOS 3 SON LOS TIPOS DE ALCANCE QUE TIENEN LOS DATOS A LOS QUE SE LES ASIGNA;

    // public    -> PUEDEN SER ACCEDIDOS A LO LARGO DE TODO EL SISTEMAS.
    // protected -> PUEDEN SER ACCEDIDOS POR TODAS AQUELLAS CLASSES QUE LA HEREDAN.
    // private   -> NADIE PUEDE HACER USO DE ELLAS A LO LARGO DEL SISTEMA, NI SIQUIERA LA CLASES QUE LA HEREDAN.
    public const PAGINATE = 25;

    #var_dump(__DIR__); -> __DIR__ nos devuelve la ruta expecifica donde se encuentra, si no le pasamos ningun dato la ruta va a ser desde donde estamos llamando la funcion;
    #devuelve las rutas absolutas;

    public $username;
    // protected $username;
    // private $username;

    public function getUsername()
    {
        // ...
    }
}