<?php

             
require __DIR__ . "/../conexao.php";

$sql = " CREATE TABLE IF NOT EXISTS  jogos (
    id  INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    genero VARCHAR (10),
    nota INT ,
    ano DATE
    )"; // segunda tabela criada no projeto
    
    $pdo->exec($sql);


$sql = "ALTER TABLE jogos ADD COLUMN ano DATE";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
   
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $nota = $_POST['nota'];
    $ano = $_POST['ano'];
    $senha = $_POST['senha'];
    

     

    if ( $senha == '999') { // cadastro de senha para poder cadastrar os jogos


    
    $sql = "INSERT INTO jogos (nome, genero, nota, ano) VALUES ('$nome', '$genero', '$nota', '$ano')";
       
    $pdo->exec($sql);
    
  
    echo "Cadastrado com sucesso!";

} else {

    echo "Senha incorreta!";
}

}


        $buscar=" SELECT * FROM jogos"; // buscar todos os jogos registrados no banco de dados

        $stmt=$pdo->query($buscar); // steitemen, instrução, comando a ser executado , função query= recebe retorno do select || exec= executa algo quando vc n quer retorno

        
        $jogos=$stmt->fetchAll(PDO::FETCH_ASSOC); // para retorno de dados no json

        
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Jogos</title>
    <link rel="stylesheet" href="../css/style_jogos.css">
</head>
<body>

<a href="../index.php" class="btn-voltar">← Voltar para o Menu</a> <!-- botão voltar -->

<!-- O CONTEÚDO PRINCIPAL  -->
<main class="conteudo-principal">
    
<div class="container">


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

    <div>
        <label for="senha">SENHA:</label>
        <input type="password" id="senha" name="senha">
    </div>

    
    <button type="submit">CADASTRAR</button>
  
   
 

    <h2> JOGOS CADASTRADOS </h2>

    <table>
        <tr>
            <th> ID </th>
            <th> NOME </th>
            <th> GENERO </th>
            <th> NOTA </th>
            <th> ANO </th>

    </tr>

<?php foreach ($jogos as $jogo) { ?>  <!-- para cada item nessa lista, faça algo com a variavel-->
<tr>

        <td><?=$jogo["id"] ?></td>
        <td><?=$jogo["nome"] ?></td>
        <td><?=$jogo["genero"] ?></td>
        <td><?=$jogo["nota"] ?></td>
        <td><?=$jogo["ano"] ?></td>
        



</tr>

    <?php } ?>


</table>

</form>

</div>

</main>

</body>
</html>

