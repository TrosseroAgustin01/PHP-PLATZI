<?php

class db {
    private static $instance;
    private $connection;

    private function __construct() {     #definimos una funcion constructora de caracter privado, esto nos va a permitir que solo se instancie una vez y dentro la misma clase;
        $this->make_connection();        #Le decimos que cuando se instancie ejecute la funcion make_connection;
    }

    public static function getInstance() {     #definimos una funcion que comprueba si existe ya una instancia de la clase, si ya existe la devuelve y si no la crea;

        if(!self::$instance instanceof self)
            self::$instance = new self();

        return self::$instance;

    }

    public function get_database_instance() {
        return $this->connection;
    }

    private function make_connection(){  #Aqui realizamos nuestra concexion a la base de datos y ademas ejecutamos la funcion "prepare" y luego la funcion "execute";
        
        $server = "localhost";
        $database = "RyM";
        $username = "root";
        $password = "";
        try {
            $conexion = new \PDO("mysql:host=$server; dbname=$database", $username, $password);
            $setnames = $conexion->prepare("SET NAMES 'utf8'");
            $setnames->execute();
            $this->connection = $conexion;
            #var_dump($setnames);
        } catch (\Exception $e) {
            die ("Ha ocurrido un error en la línea " . $e->getLine() . "<br>" . $e->getMessage());
        }
        
        
    }
}