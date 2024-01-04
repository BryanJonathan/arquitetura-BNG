<?php
use bng\Controllers\Main;
use bng\System\Router;

require_once '../vendor/autoload.php';

Router::dispatch();

// $nomes = ['joao', 'ana', 'ribeiro'];
$nome = 'jonas';
printData($nome);