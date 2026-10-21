<?php

// informar que será em jason
header('Content-Type: application/jspn; charset=utf-8');

//descobrir o método utilizado na requisição

$metodo = $_SERVER ['REQUEST_METHOD'];
//lista de chamados de exemplo
$chamados = [
    "id" => 1 ,
    "titulo" => "computador sem internet"
];
{
    // verificar método da requisição e executar X açoes.
     if ($metodo ==  'GET') {

            //como ver se o co´digo 200 de certo

            http_response_code(200);

            //pq não preciso chamar o JSON_PRETTU_PRINT(deixa bonito)? preciso só do unicode para caracteres especiais.
            echo json_encode($chamados, JSON_UNESCAPED_UNICODE);
            exit;


        }
        // se post:
        if ($metodo == 'POST') {

            //lê o conteudo no body da requisição
            //php permite ler co orpo bruto da requisição
            $conteudo = file_get_contents ('php:// input');

            //converter json em array php
            $dados = json_decode($conteudo, true);
            //verifica se os dados são válidos
            if(
                !is_array($dados) || // o json não foi convertido em array
                !isset($dados ['titulo']) || // o titulo n foi informado ou é numo
                !is_string($dados ['titulo']) || // o titulo n é um texto
                trim($dados ['titulo']) === '' // o titulo esta vazio ou contem apenas espaços

            ) {

                http_response_code(400)   ;
                echo json_encode (["erro" => "titulo obrigatorio"]);

          
            }

//simula a criação de um chamado novo
$novochamado = [
    "id" => 3,
    "titulo" => trim($dados ['titulo'])
];

http_response_code(201);
echo json_encode($novochamados, JSON_UNESCAPED_UNICODE);
exit;


        }


    }

    header('Allow: GET, POST');
    http_response_code(405);

// COMANDOS NA VPS PARA TESTAR:
// curl -i -X GET https://look.devlook.xyz/api/api-teste.php
// curl -i -X POST https://look.devlook.xyz/api/api-teste.php \ -H "Content-Type: application/json" \ -d '{"titulo":"Impressora com defeito"}'
// curl -i -X POST https://look.devlook.xyz/api/api-teste.php \ -H "Content-Type: application/json" \ -d '{"titulo":""}'
// curl -i -X POST https://look.devlook.xyz/api/api-teste.php \ -H "Content-Type: application/json" \ -d '{"descricao":"Computador não liga"}'
// curl -i -X POST https://look.devlook.xyz/api/api-teste.php \ -H "Content-Type: application/json" \ -d '{"titulo":}'
// curl -i -X DELETE https://look.devlook.xyz/api/api-teste.php
// curl -i -X GET https://devlook.xyz


//      Parâmetro    Significado
//  -i   Mostra os headers e o status da resposta
//  -X GET   Define o método GET
//  -X POST   Define o método POST
//  -X DELETE   Define o método DELETE
//  -H   Adiciona um header HTTP
//  -d   Envia dados no corpo da requisição


?>