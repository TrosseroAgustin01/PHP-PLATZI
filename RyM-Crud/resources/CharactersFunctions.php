<?php

#require_once("../controllers/CharactersController.php");
 namespace Resources ;

use Controllers\CharactersController;

    $url = "https://rickandmortyapi.com/api/character";
class CharactersFunctions{

    public function create($url){
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
    
    public function mirror(){
        try {
            $peticion = new CharactersController;
            $peticion->index();
            echo "done";
        } catch (\Throwable $e) {
            echo "el error es: ". $e->getMessage() . "\n error linea:". $e->getLine()."\n" ;
        }
    }
    
    #mirror();
    
    public function idSearch($id){
        try {
            $peticion = new CharactersController;
            $peticion->store($id);
        } catch (\Throwable $e) {
            echo "el error es: ". $e->getMessage() . "\n error linea:". $e->getLine()."\n" ;
        }
    }
}