<?php
require_once "helpdesk-func.php"; // Importa o arquivo helpdesk-func.php. O once garante que o arquivo seja carregado apenas uma vez, evitando erros de redefinição de funções- cadastrarChamados e atualizarChamado estam dentro desse arquivo.

$mensagem = ""; //Cria uma variável chamada $mensagem e a inicia vazia. Ela será usada mais adiante para mostrar se a operação deu certo ou errado.


// Identificar a operação solicitada
if ($_SERVER["REQUEST_METHOD"] === "POST") { //Uma estrutura condicional. Ela verifica se o formulário foi enviado usando o método POST (envio de dados seguros). Tudo dentro das chaves { ... } só roda se essa condição for verdadeira.
    $acao = $_POST["acao"] ?? "";  //Captura qual ação o usuário quer fazer (cadastrar ou atualizar). Se por acaso o formulário não enviou essa informação, o operador ?? garante que a variável $acao fique vazia "", evitando erros.


    if ($acao === "cadastrar") {  //  Entra neste bloco se o valor da variável $acao for exatamente igual a "cadastrar".
        $sucesso = cadastrarChamados( //  Chama a função responsável por salvar os dados.
            $_POST["setor"] ?? "",  //  Note que ela envia 5 informações VINDAS DO FORMS (nome, setor, equipamento, descricao e prioridade). 
            $_POST["nome"] ?? "",  
            $_POST["equipamento"] ?? "",
            $_POST["descricao"] ?? "",
            $_POST["prioridade"] ?? ""
        );

        $mensagem = $sucesso ? "Chamado cadastrado com sucesso!" : "Erro ao cadastrar. Verifique os dados.";
    }  // Se $sucesso for verdadeiro (?), guarde a frase "Chamado cadastrado com sucesso!" na variável $mensagem. Se for falso(:), guarde a frase de erro.


    if ($acao === "atualizar") {  // Entra neste bloco se a ação enviada pelo usuário for "atualizar".
        $sucesso = atualizarChamado( // Chama a função para atualizar um chamado existente. Ela envia duas informações: POSIÇÃO E STATUS
            (int) ($_POST["posicao"] ?? -1),
            $_POST["status"] ?? ""
        );

        $mensagem = $sucesso ? "Status atualizado!" : "Não foi possível atualizar!.";
    
    }

    if ($acao === "atualizar") {  //Agora o bloco "atualizar" possui a linha que define a $mensagem de sucesso ou erro na tela usando o operador ternário.
        $sucesso = atualizarChamado(
            (int) ($_POST["posicao"] ?? -1),
            $_POST["status"] ?? ""
        );

        $mensagem = $sucesso ? "Status atualizado!" : "Não foi possível atualizar.";
    }

    if ($acao === "excluir") { //Foi adicionada uma nova condicional para deletar chamados. Ela chama a função excluirChamado().
        $sucesso = excluirChamado(
            (int) ($_POST["posicao"] ?? -1) // forçando e convertendo a posição do array recebida em número inteiro (int). PQ??Forçar a conversão garante que a função receba exatamente o tipo de dado que ela espera.
        );

        $mensagem = $sucesso
            ? "Chamado excluído!"
            : "Não foi possível excluir.";
    }
} 

$chamados = lerChamados();
$relatorio = gerarRelatorio();  //Chama a função gerarRelatorio(), que provavelmente processa dados (como total de chamados abertos, fechados, etc.) e guarda esse resumo numérico ou estatístico nessa variável.

// evita exibir HTML enviado pelo usuário
function escapar($valor) {  // É o parâmetro (o dado de entrada). Tudo o que você colocar dentro dos parênteses na hora de chamar a função entrará aqui para ser limpo.

return  htmlspecialchars( (string) $valor, ENT_QUOTES, "UTF-8" ); //Uma função nativa do PHP. Ela pega caracteres especiais que o HTML usa para criar tags (como < e >) e os converte em códigos de texto inofensivos (como &lt; e &gt;)
}  //Uma configuração interna do PHP passada para o htmlspecialchars. Ela avisa à função que ela deve converter tanto as aspas duplas (") quanto as aspas simples ('), bloqueando invasões por atributos HTML.




?>

<!-- PARTE DO HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style_notas.css">
</head>
<body>

<a href="../index.php" class="btn-voltar">← Voltar para o Menu</a> <!-- botão voltar -->

<!-- O CONTEÚDO PRINCIPAL  -->
<main class="conteudo-principal">
    


    
<main class="conteudo-principal">

    <form method="POST">

    <!-- NOME -->
   
    <div>
        <label for="nome_funcionario">Nome Funcionário:</label>
        <input type="text" id="nome_funcionario" name="nome_funcionario">
    </div>

    <!-- SETOR -->

    <div>
        <label for="setor">Selecione o Setor Destinado:</label>
        <select id="setor" name="setor" required>
        <option value="">-- Escolha uma opção --</option>
                
                <!-- 3. Gerando as opções dinamicamente com PHP -->
                <?php foreach ($setor as $chave => $valor): ?>
                    <option value="<?php echo $chave; ?>"><?php echo $valor; ?></option>

                    <?php endforeach; ?>
                    </select>
                    
    </div>

    <!-- EQUIPAMENTO -->

    <div>
        <label for="equipamento">Selecione o Equipamento com defeito::</label>
        <select id="equipamento" name="equipamento" required>
        <option value="">-- Escolha uma opção --</option>
                
                <!-- 3. Gerando as opções dinamicamente com PHP -->
                <?php foreach ($equipamento as $chave => $valor): ?>
                    <option value="<?php echo $chave; ?>"><?php echo $valor; ?></option>

                    <?php endforeach; ?>
                    </select>
                    
    </div>
    
    <!-- DESCRIÇÃO -->

    <div>
        <label for="descricao_problema">Descreva o problema:</label>
        <textarea type="text" id="descricao_problema" name="descricao_problema" rows="5" placeholder="Explique aqui." required></textarea>
    </div>

     <!-- PRIORIDADE -->

     <div>
        <label for="prioridade">Selecione a urgência do problema:</label>
        <select id="prioridade" name="prioridade" required>
        <option value="">-- Escolha uma opção --</option>
                
                <!-- 3. Gerando as opções dinamicamente com PHP -->
                <?php foreach ($prioridade as $chave => $valor): ?>
                    <option value="<?php echo $chave; ?>"><?php echo $valor; ?></option>

                    <?php endforeach; ?>
                    </select>
                    
    </div>




<button type="submit">Enviar Chamado</button>

</form>
    </div>
</main>

<!-- PAINEL DE RESULTADOS -->
<?php if ($situacao != "") { ?>
    <div class="painel-resultados">
        <div class="card-ficha">
            <h2>RESUMO DO CHAMADO</h2>
            <div class="ficha-detalhes">
                <p> Nome: <?=$nome_funcionario ?></p>
                <!-- Exibe os valores selecionados traduzidos na tela -->
                <p> Setor: <?=$setor_selecionado ?></p>
                <p> Equipamento: <?=$equipamento_selecionado ?></p>
                <p> Descrição: <?=$descricao_problema ?> </p>
                <p> Status: <?=$status ?></p>
            </div>
        </div>

        <div class="card-resultado-status status-aluno">
            <h1><?=$nome_funcionario?> , seu chamado está <?=$status?> ! </h1>
        </div>
    </div> 
<?php } ?>
        
</body>
</html>

