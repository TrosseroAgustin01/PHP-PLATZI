<?php

namespace App\Controllers;

use Database\PDO\NewConnection;

#Con recursos nos referimos a una tabla o elemento de la base de datos
class IncomesControllers {
    private $connection;
    public function __construct()
    {
        $this->connection = NewConnection::getInstance()->get_database_instance(); #instanciamos nuestra var coneccion;
    }
    /**
     * Muestra una lista de este recurso
     */
    public function index() {
        $amount=0;
        $description='';/*
        LAS VARIABLES NOS ARROJAN UN ERROR PORQ EN TEORIA NO ESTAN DEFINIDAS, PERO "bindColumn" SE ENCARGA DE ASIGNARLES UN VALOR DE MANERA AUTOMATICA POR FILA DE LA TABLA QUE
        VAYAMOS RECORRIENDO. IGUALMENTE SI NOS MOLESTAN LOS ERRORES PODEMOS INICIALIZAR LAS VARIABLES Y LUEGO "bindColumn" LAS PISARA CON LOS NUEVOS VALORES;
        */
        $stmt = $this->connection->prepare("SELECT * FROM incomes");
        $stmt->execute();
        
       /* $stmt->bindColumn("amount",$amount);
        $stmt->bindColumn("description",$description);

        while($stmt->fetch() /*|| $row = $stmt->fetch() */#)*/ #lo que decimos aca es que mientras existan filas por recorrer, siguen imprimiendolas;fetch devuelve un booleano,por ende en el momento
            //print_r($row);            en el que no pueda realizar mas peticiones o mas lecturas devolvera false y ahi rompera el ciclo while
            #echo "Ganaste " . $amount . " USD en: " . $description . "\n";
            $results = $stmt->fetchAll();
            require("../resources/views/incomes/index.php");
    }

    /**
     * Muestra un formulario para crear un nuevo recurso
     */
    public function create() {}

    /**
     * Guarda un nuevo recurso en la base de datos
     */
    public function store($data) {

        $stmt = $this->connection->prepare("INSERT INTO incomes (payment_method, type, date, amount, description) VALUES (:payment_method, :type, :date, :amount, :description)");

        $stmt->bindValue(":payment_method", $data["payment_method"]);
        $stmt->bindValue(":type", $data["type"]);
        $stmt->bindValue(":date", $data["date"]);
        $stmt->bindValue(":amount", $data["amount"]);
        $stmt->bindValue(":description", $data["description"]);

        $stmt->execute();

        #print_r($results);
    }

    /**
     * Muestra un único recurso especificado 
     */
    public function show($id) {
        $peticion = $this->connection->prepare("SELECT * from incomes WHERE id=:id");
        $peticion->execute([
            ":id" => $id
        ]);

        $result = $peticion->fetch(\PDO::FETCH_ASSOC);
        #print_r($result);
        echo "Este es el ingreso seleccionado: {$result["description"]} \n";
    }

    /**
     * Muestra el formulario para editar un recurso
     */
    public function edit() {}

    /**
     * Actualiza un recurso específico en la base de datos
     */
    public function update($data,$id) {
        $peticion = $this->connection->prepare("UPDATE incomes SET
           payment_method = :payment_method, 
            type = :type, 
            date = :date, 
            amount = :amount, 
            description = :description
        WHERE id=:id;");

        $peticion->execute([
            ":id" => $id,
            ":payment_method" => $data["payment_method"],
            ":type" => $data["type"],
            ":date" => $data["date"],
            ":amount" => $data["amount"],
            ":description" => $data["description"],
        ]);
        echo "se actualizo \n";
    }

    /**
     * Elimina un recurso específico de la base de datos
     */
    public function destroy($id) {
        $this->connection->beginTransaction(); #esta funcion nos obliga a enviar una confirmacion para realizar la eliminacion de la fila o filas 

        // Esto no funciona en MySQL
        // $this->connection->exec("DROP TABLE incomes_test"); esta funcion se ejecuta sin importar que se este llevando a cabo una transaccion;s

        $peticion = $this->connection->prepare("DELETE FROM incomes WHERE id =:id");
        $peticion->execute([
            ":id" => $id
        ]);
        $confirmacion= readline("Si esta seguro que quiere eliminar dicha fila responda SI, de lo contrario responda NO: " );

        $confirmacion = \strtolower($confirmacion);

        if($confirmacion == "no"){
            $this->connection->rollBack();
        }else
            $this->connection->commit();
            echo "ingresos correspondientes a {$id} eliminados de la base de datos correctamente";
    }
    
}

/*

index - Display a listing of the resource.
create - Show the form for creating a new resource.
store - Store a newly created resource in storage.
show - Display the specified resource.
edit - Show the form for editing the specified resource.
update - Update the specified resource in storage.
destroy - Remove the specified resource from storage.

*/