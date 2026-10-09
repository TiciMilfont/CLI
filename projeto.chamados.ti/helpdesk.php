


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
        <option>value="">-- Escolha uma opção --</option>
                
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
        <option>value="">-- Escolha uma opção --</option>
                
                <!-- 3. Gerando as opções dinamicamente com PHP -->
                <?php foreach ($equipamento as $chave => $valor): ?>
                    <option value="<?php echo $chave; ?>"><?php echo $valor; ?></option>

                    <?php endforeach; ?>
                    </select>
                    
    </div>
    
    <!-- DESCRIÇÃO -->

    <div>
        <label for="descricao_problema">Descreva o problema:</label>
        <textarea type="text" id="descricao_problema" name="descricao_problema" rows="5" placeholder="Explique aqui." required></style></textarea>
    </div>

     <!-- PRIORIDADE -->

     <div>
        <label for="prioridade">Selecione a urgência do problema:</label>
        <select id="prioridade" name="prioridade" required>
        <option>value="">-- Escolha uma opção --</option>
                
                <!-- 3. Gerando as opções dinamicamente com PHP -->
                <?php foreach ($prioridade as $chave => $valor): ?>
                    <option value="<?php echo $chave; ?>"><?php echo $valor; ?></option>

                    <?php endforeach; ?>
                    </select>
                    
    </div>




<button type="submit">Enviar Chamado</button>

    </div>



</form>

</div>


  
<?php if ($situacao != "")  { ?>
  
    <div class="painel-resultados">

        <div class="card-ficha">
            <h2>RESUMO DO CHAMADO</h2>
            <div class="ficha-detalhes">
                <p> Nome: <?=$nome_funcionario ?></p>
                <p> Setor: <?=$setor ?></p>
                <p> Equipamento: <?=$equipamento ?></p>
                <p> Descrição: <?=$descricao_problema ?> </p>
                <p> Status: <?=$status ?></p>
            </div>
        </div>

        <!--  RESULTADO -->
        <div class="card-resultado-status status-aluno <?=$classe_css?>">
            <h1><?=$nome_funcionario?> seu chamado está <?=$situacao_chamado?></h1>
        </div>

    </div> 
<?php } ?>





        
</body>
</html>