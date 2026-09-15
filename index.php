<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        $nome = "Agatha";
        $idade = 50;
    
       
        if ($idade <= 18) {
            $resposta = "$é menor de idade.";
        }
        else {
            $resposta = "$é maior de idade.";
        }     
        ?>

<div class="container">

        <h1> Nome: <?=$nome ?></h1>
        <h1> Idade: <?=$idade ?></h1>
        <p> <?=$nome?> é <?=$resposta ?></p>
    

<form>

    <form action="/enviar-dados" method="POST">
   
    <div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome:" required>
    </div>

    <div>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" placeholder="Ex: 25" required>
    </div>

    <div>
        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" min="1900" max="2026" placeholder="Ex: 2026" required>
    </div>

    <button type="submit">Enviar</button>


</form>

</div>
    
        
</body>
</html>