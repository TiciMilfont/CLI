<?php

//careegando o arquivo de rotas e guardando o valor retornando por ele na variável $rotas.
$rotas = require __DIR__ . "/routes/web.php";

//se a rota estiver vazia, vai direcionar automaticamente para o portfolio
$rota = $_GET['rota'] ?? 'portfolio';

// definindo a variavel de verificação do método HTTP
$metodo = $_SERVER['REQUEST_METHOD'];


//verificando se a rota existe, se não existir, define status 404
if (!isset($rotas[$metodo][$rota])) {
    http_response_code(404);
    echo "Página não encontrada!";
    exit;
}

// falta explicar
[$controller, $acao] = $rotas [$metodo][$rota];

//falta explicar
$controller->$acao();



?>