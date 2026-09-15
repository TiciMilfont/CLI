
<?php
$nome = "nome";
        $idade = "idade";
        $resposta = "resposta";

         /*$_SERVER  variável pré-definida do PHP */

        if ($_SERVER["REQUEST_METHOD"] == "POST") { /* == perguntando se o formulário preenchido é o POST */

            $nome = $_POST ["nome"];
            $idade = $_POST ["idade"];


        if ($idade <= 18) {
            $resposta = "$é menor de idade.";
        }
        else {
            $resposta = "$é maior de idade.";
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
  

       
        
       

<div class="container">

    
    

<form>

    <form action="/enviar-dados" method="POST">
   
    <div>
        <input type="text" id="nome" name="nome">
    </div>

    <div>
        <input type="number" id="idade" name="idade">
    </div>

    <div>      
        <input type="number" id="ano" name="ano">
    </div>

    <button type="submit">Enviar</button>


</form>

</div>
  
<?php if ($resposta != "")  { ?>

    <h1> Nome: <?=$nome ?></h1>
    <h1> Idade: <?=$idade ?></h1>
    <p> <?=$nome?> é <?=$resposta ?></p>
    
    <?php } ?>


        
</body>
</html>