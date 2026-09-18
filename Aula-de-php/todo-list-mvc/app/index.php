<?php

require_once __DIR__ . '/app/controle/controle.php';

$controlle = new tarefaController();

$action = $_GET['action'] ?? 'index';

switch ($action){
    case 'criar':
        $controlle->criar();
        break;
    case 'excluir':
        $controlle->excluir();
        break;
        
    default:
    $controlle->Index();
    break;
}

?>