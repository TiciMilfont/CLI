
<?php
$nome = "nome";
        $idade = "idade";
        $resposta = "resposta";
        $ano = "ano";

         /*$_SERVER  variável pré-definida do PHP */

        if ($_SERVER["REQUEST_METHOD"] == "POST") { /* == perguntando se o formulário preenchido é o POST */

            $nome = $_POST ["nome"];
            $idade = $_POST ["idade"];
            $ano = $_POST ["ano"];


        if ($idade <= 18) {
            $resposta = "é menor de idade.";
        }
        else {
            $resposta = "é maior de idade.";
        }   }  

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a href="index.php" class="btn-voltar">← Voltar para o Menu</a> <!-- potão voltar -->
  
    
<div class="container">

    


    <form method="POST">
   
    <div>
    <label for="nome">NOME:</label>
        <input type="text" id="nome" name="nome">
    </div>

    <div>
    <label for="idade">IDADE:</label>
        <input type="number" id="idade" name="idade">
    </div>

    <div>  
    <label for="ano">ANO DE NASCIMENTO:</label>    
        <input type="number" id="ano" name="ano">
    </div>

    <button type="submit">Enviar</button>


</form>

</div>
  
<?php if ($resposta != "")  { ?>

    <p> Nome: <?=$nome ?></p>
    <p> Idade: <?=$idade ?></p>
    <p> Ano de Nascimento: <?=$ano ?></p>
    <h1> <?=$nome?> <?=$resposta ?></h1>
    
    <?php } ?>


        
</body>
</html>