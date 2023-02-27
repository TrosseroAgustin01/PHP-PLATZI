<?php
require("../vendor/autoload.php");

use App\Controllers\IncomesControllers;
use App\Controllers\WhitdrawalsController;
use Router\RouterHandler;

// Obtener la URL
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);

/* echo "<pre>";
    var_dump($slug);
echo "</pre>"; */

$resource = $slug[0] == "" ? "/" : $slug[0];
$id = $slug[1] ?? null;

// incomes/1

// Intancia del router

$router = new RouterHandler();

switch ($resource) {

    case '/':
        echo "Estás en la front page";
        break;

    case "incomes":
        
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(IncomesControllers::class, $id);

        break;

    case "withdrawals":
        
        $method = $_POST["method"] ?? "get";
        $router->set_method($method);
        $router->set_data($_POST);
        $router->route(WhitdrawalsController::class, $id);

        break;
    
    default:
        echo "404 Not Found";
        break;

}
?>