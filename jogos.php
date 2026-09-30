
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
  
   <!-- cola h2 aqui-->
 

   
</form>

</div>

</main>

</body>
</html>

