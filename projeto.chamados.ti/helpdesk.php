
<!-- CREATE  -->



<?php

$nome_funcionario = "Nome Funcionário";
$nome_funcionario = "Aberto";

$setor = [
    "producao" => "Produção",
    "administracao" => "Administração",
    "logistica" => "Logistica",
    "financeiro" => "Financeiro",
    "ti" => "TI"
    
];

$equipamento = [
    "computador" => "Computador",
    "impressora" => "Impressora",
    "rede" => "Rede",
    "sistema" => "Sistema",
    "outro" => "Outro"
];

$descricao_problema = ""; 

$prioridade = [
    "baixa" => "Baixa",
    "media" => "Média",
    "alta" => "Alta"
];

// 2. Inicialização das variáveis para evitar erros ao carregar a página
$nome_funcionario = "";
$descricao_problema = ""; 
$situacao = ""; 
$status = "Aberto"; 
$setor_selecionado = "";       // <-- Nova variável para aparece somente a seleção no resumo
$equipamento_selecionado = "";

//  processando o formulário (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Captura e limpa os dados enviados pelo formulário
    $nome_funcionario = htmlspecialchars($_POST['nome_funcionario'] ?? '');
    $chave_setor = $_POST['setor'] ?? '';
    $chave_equipamento = $_POST['equipamento'] ?? '';
    $descricao_problema = htmlspecialchars($_POST['descricao_problema'] ?? '');
    $chave_prioridade = $_POST['prioridade'] ?? '';
 
    // Traduz as chaves para os nomes que o usuário lê
    $setor_selecionado = $setor[$chave_setor];
    $equipamento_selecionado = $equipamento[$chave_equipamento];
    $prioridade_selecionada = $prioridades[$chave_prioridade];

 $situacao = "enviado"; 
    } else {
        $situacao = "erro";
    }

?>
    

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
    
<div class="container">

    
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