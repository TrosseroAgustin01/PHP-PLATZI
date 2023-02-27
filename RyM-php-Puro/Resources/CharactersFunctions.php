<?php

require_once("./Controllers/CharactersController.php");

    $url = "https://rickandmortyapi.com/api/character";

 function create($url){
        try {
            #$data = json_decode(file_get_contents("https://api.mercadolibre.com/users/226384143/"),true);
            $data = json_decode(file_get_contents($url),true);
            #print_r($data["results"]);
            foreach($data["results"] as $characters){
            $carga = new CharactersController;
            $carga->store([
                #"id" => $characters["id"],
                "name" => $characters["name"],
                "status" => $characters["status"],
                "species" => $characters["species"],
                "type" => $characters["type"],
                "gender" => $characters["gender"],
                "origin" => $characters["origin"]["name"],
                "location" => $characters["location"]["name"],
                "image" => $characters["image"],
                "episode" => $characters["episode"][0],
                "url" => $characters["url"],
                "created" => $characters["created"]
            ]);
            }
            #echo "done";
        } catch (\Throwable $e) {
            echo "el error es: ". $e->getMessage() . "\n error linea:". $e->getLine()."\n" ;
            #echo $e->getTrace();
        }
    }
    
    #create($url);
    
     function mirror(){
        try {
            $peticion = new CharactersController;
            $aux = $peticion->index();
            return $aux;
            #echo "done";
        } catch (\Throwable $e) {
            echo "el error es: ". $e->getMessage() . "\n error linea:". $e->getLine()."\n" ;
        }
    }
    
   # mirror();
    
     function idSearch($id){
        try {
            $peticion = new CharactersController;
            $peticion->store($id);
        } catch (\Throwable $e) {
            echo "el error es: ". $e->getMessage() . "\n error linea:". $e->getLine()."\n" ;
        }
    }

/*     function insert($data){
        foreach($data as $characters){
            $carga = new CharactersController;
            $carga->create([
                #"id" => $characters["id"],
                "name" => $characters["name"],
                "status" => $characters["status"],
                "gender" => $characters["gender"],
                "image" => $characters["image"],
                "created" => $characters["created"]
            ]);
            }
    } */