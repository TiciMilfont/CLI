

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogos</title>
    <link rel="stylesheet" href="style_jogos.css">
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

    <div>
        <label for="genero">GENERO DO JOGO:</label>
        <input type="text" id="genero" name="genero">
    </div>

    <div>
        <label for="nota">NOTA DO JOGO:</label>
        <input type="number" id="nota" name="nota">
    </div>

    
    <button type="submit">CADASTRAR</button>


</form>

</div>

</main>

</body>
</html>

<?php

             
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $nota = $_POST['nota'];

    try {
      
        $sql = "INSERT INTO jogos (nome, genero, nota) VALUES ('$nome', '$genero', '$nota')";
        $pdo->exec($sql);
      
        echo "Cadastrado com sucesso!";

    } catch (PDOException $erro) {  

        echo "Erro ao cadastrar:" .$erro-> getMessage();
        
        } 
}
            

        ?>