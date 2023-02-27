<?php

namespace App\Controllers;

use Database\PDO\NewConnection;

class WhitdrawalsController {
    private $connection;
    public function __construct()
    {
        $this->connection = NewConnection::getInstance()->get_database_instance(); #instanciamos nuestra var coneccion;
    }
    /**
     * Muestra una lista de este recurso
     */
    public function index() {
        # USANDO FETCH ALL;
        /* $peticion = $this->connection->prepare("SELECT * FROM whitdrawals");
        $peticion->execute();
        $results = $peticion->fetchAll();

        print_r($results);
        /* foreach($results as $resultado){
            echo $resultado["description"]."\n";
        } */ 

        #USANDO FETCH COLUMN
        $peticion = $this->connection->prepare("SELECT amount, description FROM whitdrawals");
        $peticion->execute();
        $results = $peticion->fetchAll(\PDO::FETCH_COLUMN,0);

        #print_r($results);

        foreach($results as $result){
            echo "Gastaste {$result} dolares \n";
        }
    }
        
    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {
        #$connection = NewConnection::getInstance()->get_database_instance();

        $stmt = $this->connection->prepare("INSERT INTO whitdrawals (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $data["description"] = "Compré cosas para mí";
        #EL METODO PREPARE PREAPARA LA CONSULTA PERO NO LA EJECUTA YA QUE PHP NO LA LEE TODAVIA
        $stmt->execute();
        #EL METODO EXECUTE DA INICIO A LA LECTURA Y EJECUCION DE LA CONSULTA
    }

    /**
     * Muestra un único recurso especificado
     */
    public function show($id) {
        $peticion = $this->connection->prepare("SELECT * FROM whitdrawals WHERE id=:id");
        $peticion->execute([
            ":id" => $id
        ]);

        $results = $peticion->fetch();

        # SI YO NO QUIERO VER LOS INDICES DUPLICADOS LO QUE HAGO ES PASARLE AL FETCH EL ARGUMENTO "PDO::FETCH_ASSOC", ESTO LO QUE HARA ES TRAERME SOLO LOS INDICES ASOCIATIVOS;
        #print_r($results);
        #var_dump($results) ;
        echo "Los datos pertenecientes al retiro con id = {$id} han sido otorgados con exito, tus gastos han sido {$results['amount']} dolares\n";
    }

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit() {}

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update($data, $id) {
        $peticion = $this->connection->prepare("UPDATE whitdrawals SET
            payment_method = :payment_method,
            type = :type,
            date = :date,
            amount = :amount,
            description = :description
            WHERE id=:id");

        $peticion->execute([
            ":id"=>$id,
            ":payment_method" => $data["payment_method"],
            ":type" => $data["type"],
            ":date" => $data["date"],
            ":amount" => $data["amount"],
            ":description" => $data["description"]
        ]);

        echo "actualizacion exitosa \n";
    }

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy($id) {
        $this->connection->beginTransaction();

        $peticion = $this->connection->prepare("DELETE FROM whitdrawals WHERE id=:id");

        $peticion->execute([
            ":id" => $id
        ]);

        $confirmacion= readline("Si esta seguro que quiere eliminar dicha fila responda SI, de lo contrario responda NO: " );

        $confirmacion = \strtolower($confirmacion);

        if($confirmacion == "no"){
            $this->connection->rollBack();
        }else
            $this->connection->commit();
            echo "ingresos correspondientes a {$id} eliminados de la base de datos correctamente \n";
    }
    
}