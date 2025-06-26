<?php 
require_once ( __DIR__ . "/../lib/DataRequest.php");

use lib\DataRequest;

$dataRequest = new DataRequest();

$type = $_POST['type'] ?? "";

switch($type) {
    case 'clientes':
        $data = $dataRequest->dadosClientes();
        break;
    case 'fornecedores':
        $data = $dataRequest->dadosFornecedores();
        break;
    case 'usuários':
        $data = $dataRequest->dadosUsuarios();
        break;
    default:
        $data = [];
}

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header('Content-Type: application/json');

echo json_encode(compact('data'));