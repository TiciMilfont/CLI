

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

    <div>
        <label for="ano">ANO DO JOGO:</label>
        <input type="date" id="ano" name="ano">
    </div>

    
    <button type="submit">CADASTRAR</button>

    <h2> JOGOS CADASTRADOS </h2>

    <table><tr>
        <th> ID </th>
        <th> NOME </th>
        <th> GENERO </th>
        <th> NOTA </th>
        <th> ANO </th>

    </tr>

<?php foreach ($jogo as $jogo) { ?>  <!-- para cada item nessa lista, faça algo com a variavel-->
<tr>
<th> ID </th>
        <th><?= $jogo ["id"] ?></th>
        <th><?= $jogo ["nome"] ?></th>
        <th><?= $jogo ["genero"] ?></th>
        <th><?= $jogo ["nota"] ?></th>
        <th><?= $jogo ["ano"] ?></th>
        



</tr>

    <?php } ?>


</table>

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
    $ano = $_POST['ano'];

    try {
      
        $sql = "INSERT INTO jogos (nome, genero, nota, ano) VALUES ('$nome', '$genero', '$nota', '$ano')";
        $sql = "ALTER TABLE jogos ADD COLUMN ano DATE";
        $pdo->exec($sql);
      
        echo "Cadastrado com sucesso!";

    } catch (PDOException $erro) {  

        echo "Erro ao cadastrar:" .$erro-> getMessage();
        
        } 
}
            

        ?>