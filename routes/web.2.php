<?php
//
require_once __DIR__ . '/../app/Http/Controllers/PortfolioController.php';
//require_once __DIR__ . '/../app/Http/Controllers/HelpdeskController.php';
// listando em arrays as rotas que vamos criar
return [
    'GET' => [
        'portfolio' => [new PortfolioController(), 'index'],
        'idade' => [new PortfolioController(), 'idade'],
        'jogos' => [new PortfolioController(), 'jogos'],
        'desafio_notas' => [new PortfolioController(), 'desafio_notas'],
        'login_basico' => [new PortfolioController(), 'login_basico'],
        'notas' => [new PortfolioController(), 'notas'],
        'teste_post' => [new PortfolioController(), 'teste_post'],
      //  'helpdesk' => [new HelpdeskController(), 'index'],
        'jogos' => [],
 
        //outras atividades...
],
//'POST' => [ //
//'helpdesk' => [new HelpdeskController(), '']
//]

];

?>