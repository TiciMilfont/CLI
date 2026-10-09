<!-- READ  -->

<?php
// Define o arquivo de texto onde os chamados serão salvos em formato JSON
define('ARQUIVO_DADOS', 'projeto.chamdos.ti/chamados.json');

// FUNÇÃO: CADASTRAR 
function cadastrarChamado($nome, $setor, $equipamento, $descricao_problema, $prioridade) {
    // Carrega os chamados existentes
    $chamados = consultarChamados();

    // Cria o novo chamado com um ID único 
    $novoChamado = [
        "id" => time() . rand(10, 99), 
        "nome" => $nome,
        "setor" => $setor,
        "equipamento" => $equipamento,
        "descricao" => $descricao_problema,
        "prioridade" => $prioridade,
        "status" => "Aberto"
    ];

    // novo chamado ao final da lista
    $chamados[] = $novoChamado;
    // Converte a lista atualizada para JSON e salva no arquivo
    file_put_contents(ARQUIVO_DADOS, json_encode($chamados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    return true;
}

// FUNÇÃO: CONSULTAR 
function consultarChamados() {
    if (!file_exists(ARQUIVO_DADOS)) {
        return []; // Retorna uma lista vazia se o arquivo ainda não existir
    }
    
    $conteudo_texto = file_get_contents(ARQUIVO_DADOS);
    // Transforma o texto JSON de volta em um Array do PHP
    return json_decode($conteudo_texto, true) ?? [];
}

// 3. FUNÇÃO: ATUALIZAR STATUS
function atualizarChamado($idChamado, $novoStatus) {
    $chamados = consultarChamados();

    foreach ($chamados as &$chamado) {
        if ($chamado['id'] == $idChamado) {
            $chamado['status'] = $novoStatus; // Atualiza o status 
            break;
        }
    }

    file_put_contents(ARQUIVO_DADOS, json_encode($chamados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    return true;
}

// FUNÇÃO: EXCLUIR 
function excluirChamado($idChamado) {
    $chamados = consultarChamados();

    // Filtra a lista mantendo apenas os chamados que possuem o ID diferente do selecionado
    $chamadosFiltrados = array_filter($chamados, function($chamado) use ($idChamado) {
        return $chamado['id'] != $idChamado;
    });

    // Reorganiza  array
    $chamadosFiltrados = array_values($chamadosFiltrados);

    file_put_contents(ARQUIVO_DADOS, json_encode($chamadosFiltrados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    return true;
}
?>