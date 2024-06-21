<?php

require_once '../src/configuration/Database.php';
require_once '../src/models/appModel.php';
require_once '../src/controllers/appController.php';

define('BASE_PATH', realpath(__DIR__ . '/../src'));
require_once BASE_PATH . '/../vendor/autoload.php';

use Controllers\Controller;

$controller = new Controller();

$action = $_GET['action'] ?? 'index'; // esses index é o metodo do controller que renderiza a pagina principal  
$id = $_GET['id'] ?? null;

switch ($action) { // ira definir qual metodo sera chamado com base nessa ection 
    case 'create':
        $controller->create();
        break;
    case 'update':
        if ($id) {
            $controller->update($id);
        } else {
            echo 'ID não fornecido para atualização';
        }
        break;
    case 'delete':
        if ($id) {
            $controller->delete($id);
        } else {
            echo 'ID não fornecido para deleção';
        }
        break;
    default:
        $controller->index();
        break;
}
