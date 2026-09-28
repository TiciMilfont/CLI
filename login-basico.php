<?php
$login = "login";
        $senha = "senha";
       

        if ($_SERVER["REQUEST_METHOD"] == "POST") { /* == perguntando se o formulário preenchido é o POST */

            $login = $_POST ["login"];
            $senha = $_POST ["senha"];
           

        if ($login == adm && $senha == 1234) {
            $situacao_texto = " Logado com Sucesso!";
        }

        else {
            $situacao_texto = "Usuário ou senha inválidos!";
        }   }  

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>

<a href="index.php" class="btn-voltar">← Voltar para o Menu</a> <!-- botão voltar -->


<!-- O CONTEÚDO PRINCIPAL  -->
<main class="conteudo-principal">
    
<div class="container">

    
<main class="conteudo-principal">

    <form method="POST">
   
    <div>
        <label for="login">LOGIN:</label>
        <input type="text" id="login" name="login">
    </div>

    <div>
        <label for="senha">SENHA:</label>
        <input type="password" id="login" name="senha" required
           oninvalid="this.setCustomValidity('Por favor, insira uma idade válida (maior que 0).')"
           oninput="this.setCustomValidity('')">
    </div>


    <button type="submit">ENTRAR</button>

    </form>

    <div class="acesso" <?=$classe_css?>">
            <h1><?=$login?> : <?=$situacao_texto?></h1>
        </div>


</div>

        
</body>
</html>