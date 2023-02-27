<?php

#require_once("../db/direct.php");
 namespace Controllers;

 use Db\db;

class CharactersController {
    private $connection;
    public function __construct()
    {
        $this->connection = db::getInstance()->get_database_instance(); #instanciamos nuestra var coneccion;
    }

    public function index(){
        try {
            $peticion = $this->connection->prepare("SELECT * FROM characters");
            $peticion->execute();
            $results = $peticion->fetchAll();
            #print_r($results);
            return $results;
        } catch (\Throwable $e) {
            echo "el error es: ". $e->getMessage() . " " . "Error linea:". $e->getLine()."  Del archivo:". $e->getFile() ."\n";
        }
        
    }

    public function store($data){
        
            $peticion = $this->connection->prepare("INSERT INTO characters(name, status,species, type, gender, origin, location, image, episode, url, created) VALUES (:name,:status,:species,:type,:gender,:origin,:location,:image,:episode,:url,:created)");
            /* VALUES ('{$data["name"]}','{$data["status"]}','{$data["species"]}','{$data["type"]}','{$data["gender"]}','{$data["origin"]}','{$data["location"]}','{$data["image"]}','{$data["episode"]}','{$data["url"]}','{$data["created"]}')"); */
    
            #EL METODO PREPARE PREAPARA LA CONSULTA PERO NO LA EJECUTA YA QUE PHP NO LA LEE TODAVIA

            #$peticion->execute($data);
            $peticion->execute([
                ":name"=> $data["name"],
                ":status"=> $data["status"],
                ":species"=> $data["species"],
                ":type"=> $data["type"],
                ":gender"=> $data["gender"],
                ":origin"=> $data["origin"],
                ":location"=> $data["location"],
                ":image"=> $data["image"],
                ":episode"=> $data["episode"],
                ":url"=> $data["url"],
            ":created"=> $data["created"]
            ]);

        #EL METODO EXECUTE DA INICIO A LA LECTURA Y EJECUCION DE LA CONSULTA
    }

    public function show($id) {
        $peticion = $this->connection->prepare("SELECT * FROM characters WHERE id=:id");
        $peticion->execute([
            ":id" => $id
        ]);

        $results = $peticion->fetch();

        # SI YO NO QUIERO VER LOS INDICES DUPLICADOS LO QUE HAGO ES PASARLE AL FETCH EL ARGUMENTO "PDO::FETCH_ASSOC", ESTO LO QUE HARA ES TRAERME SOLO LOS INDICES ASOCIATIVOS;
        #print_r($results);
        #var_dump($results) ;
        return $results;
    }
} 