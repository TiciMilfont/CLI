<?php

       
        // 1. IMPORTA A CONEXÃO: Traz a variável $pdo para esta página
require "conexao.php";

// 2. VERIFICA SE O FORMULÁRIO FOI ENVIADO
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Pega os dados que o usuário digitou 
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $nota = $_POST['nota'];

    try {
        // Prepara o comando SQL de forma segura usando "SQL Preparation" (evita invasões)
        $stmt = $pdo->prepare("INSERT INTO teste (nome, genero, nota) VALUES (:nome, :genero, :nota)");
        
        // Executa o comando trocando as etiquetas (:nome e :idade) pelos valores reais , "$stmt =" para salvar a preparação
        $stmt->execute([
            'nome' -> $nome,
            'genero' -> $genero,
            'nota' ->$nota

        ]);

      
        echo "Cadastrado com sucesso!";

    } catch (PDOException $erro) {  // tipo de erro que queremos capturar

        echo "Erro ao cadastrar:" .$erro-> getMessage();
        
        } 
}
            

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogos</title>
    <link rel="stylesheet" href="style_notas.css">
</head>
<body>

<a href="index.php" class="btn-voltar">← Voltar para o Menu</a> <!-- botão voltar -->

<!-- O CONTEÚDO PRINCIPAL  -->
<main class="conteudo-principal">
    
<div class="container">

    
<main class="conteudo-principal">

    <form method="POST">
   
    <div>
        <label for="nome">NOME DO JOGO:</label>
        <input type="text" id="nome" name="nome">
    </div>

    <div></div>
        <label for="genero">GENERO DO JOGO:</label>
        <input type="text" id="genero" name="genero">
    </div>

    <div></div>
        <label for="nota">NOTA DO JOGO:</label>
        <input type="number" id="nota" name="nota">
    </div>

    
    <button type="submit">CADASTRAR</button>


</form>

</div>

</main>

</body>
</html>