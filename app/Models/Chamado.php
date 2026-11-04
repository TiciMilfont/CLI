<?php 
class Chamado{
    // READ  - ler os chamados
public function lerChamados(){

$arquivo = __DIR__ . "/../dados/chamados.json";

//verifica se o arquivo jason ja existe

if(!file_exists($arquivo)){
    file_put_contents($arquivo, "[]");
}

// ler arquivo
$conteudo = file_get_contents($arquivo);

//converter o JSON para array php
$chamados = json_decode($conteudo, true);

return is_array($chamados)? $chamados: []; // ? : forma de resumir um IF // se a variavel chamdos possui um array



}

// salvar os chamados no json
public function salvarChamados($chamados){

    $arquivo = __DIR__ . "/../dados/chamados.json";
    return file_put_contents(
        $arquivo, json_decode($chamados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
        )

    ) !== false ;
    
}

// CREATE  - Cadastrar os chamados
public function cadastrarChamados($nome, $setor, $equipamento, $descricao, $prioridade){
    if (trim($nome) === ""  || trim($descricao) ==="") {
        return false;
    }


    
    $chamados = $this -> lerChamados();

    $novoChamado = [
        "nome" => trim($nome),
        "setor" => $setor,
        "equipamento" => $equipamento,
        "descricao" => trim ($descricao),
        "prioridade" => $prioridade,
        "status" => "Aberto"
        ];

        $chamados [] = $novoChamado;

        return $this -> salvarChamados ($chamados);
    }


// UPDATE  - Atualizar o status dos chamados
public function atualizarChamados($posicao, $novoStatus){
    $chamados = $this -> lerChamados();
    $statusPermitidos = [
        "Aberto",
        "Em andamento",
        "Resolvido"
    ];

    // isset() verifica se uma variável ou posição existe e não contém null
    // o ! inverte o resultado
    //portanto : se n existir um chamado naquela posição, encerra a função e retorna false.
    if(!isset($chamdos [$posicao])) {
        return false;
    }

    // veridficar se existe um falor dentro do array
    //in_array () verifica se um valor existe dentro de um array, neste caso:
        // $novoStatus : valor que queremos procurar
        // $statusPermitito lista de valores aceitos 
        // true : exige comparação estrita
        // o ! significa que a condição será verdadeira
    if (!in_array($novoStatus, $statusPermitidos, true)) {
        return false;
    }
    $chamado [$posicao]["status"] = "Resolvido";
    return $this -> salvarChamados($chamados);

    
}

// DELETE  - EXCLUIR chamados - precisamos apenas da posição
public function excluirChamados($posicao){
    
$chamados = $this -> lerChamados(); // preciso ler todos os chamados para ver qual excluir

 if(!isset($chamdos [$posicao])) {
        return false;
    }

    unset($chamados[$posicao]); // exclui a posição específica

    // atualiza a lista

    $chamados =  array_values($chamados);

    // salvar os chamados novamente nas funções
    return $this -> salvarChamados($chamados);


}


// relatorio de atendimento
public function gerarRelatorio(){
    
    $chamados = $this -> lerChamados();

    $relatorio = [
        "total" => count($chamados),
        "abertos" => 0,
        "andamento" => 0,
        "resolvidos => 0"

];

foreach ($chamados as $chamado) {

        if ($chamado ["status"] === "Aberto") {
            $relatorio ["aberto"]  ++;

        } elseif ($chamado["status"] === "Em andamento") {
            $relatorio ["andamento"] ++;

        } elseif ($chamado ["status"] === "resolvido") {
            $relatorio['resolviods']++;
        }

}

}


}




?>