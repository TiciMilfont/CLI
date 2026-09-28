<?php
session_start(); /* == para login*/
$login = "login";
        $senha = "senha";
        $situacao_texto = "";
$classe_css = "";
       

        if ($_SERVER["REQUEST_METHOD"] == "POST") { /* == perguntando se o formulário preenchido é o POST */

            $login = $_POST ["login"];
            $senha = $_POST ["senha"];
           

        if ($login == 'adm' && $senha == '1234') {
            $situacao_texto = " Logado com Sucesso!";
            $_SESSION['usuario'] = $login; // Salva o nome do usuário para usar depois
        

            header("Location: pagina.login.php");
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

    <form method="POST">
   
    <div>
        <label for="login">LOGIN:</label>
        <input type="text" id="login" name="login">
    </div>

    <div>
        <label for="senha">SENHA:</label>
        <input type="password" id="senha" name="senha" required>
    </div>


    <button type="submit">ENTRAR</button>

    </form>

    <?php if (!empty($situacao_texto)): ?>
            <div class="acesso <?=$classe_css?>">
                <h1><?=$situacao_texto?></h1>
            </div> 
        


</div>
<?php endif; ?>

</main>      
</body>
</html>