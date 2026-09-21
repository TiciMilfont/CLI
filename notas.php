
<?php
$nome = "nome";
        $idade = "idade";
        $soma_da_nota = "soma_da_nota"
        $soma_dos_pesos = "soma_dos_pesos";
        $media = "media";
        $situacao = "situacao";
        $nota1 = "nota1";
        $nota2 = "nota2";
        $nota3 = "nota3";
        $nota4 = "nota4";
        $nota5 = "nota5";
        $peso1 = 2;
        $peso2 = 3;
        $peso3 = 1;
        $peso4 = 1;
        $peso5 = 3;
        $resposta = "resposta";

         /*$_SERVER  variável pré-definida do PHP */

        if ($_SERVER["REQUEST_METHOD"] == "POST") { /* == perguntando se o formulário preenchido é o POST */

            $nome = $_POST ["nome"];
            $idade = $_POST ["idade"];
            $nota1 = $_POST ["nota1"];
            $nota2 = $_POST ["nota2"];
            $nota3 = $_POST ["nota3"];
            $nota4 = $_POST ["nota4"];
            $nota5 = $_POST ["nota5"];
            $soma_da_nota = $_POST ["soma_da_nota"];
            $soma_dos_pesos = $_POST ["soma_dos_pesos"];
            $media = $_POST ["media"];

            $soma_da_nota =  ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3) + ($nota4 * $peso4) + ($nota5 * $peso5);
            $soma_dos_pesos = $peso1 + $peso2 + $peso3 + $peso4 + $peso5 = 10;
            $media = $soma_da_nota / $soma_dos_pesos;


        if ($media >= 7) {
            $situacao = "APROVADO";
        }

        if else ($media >= 5 && <= 7) {
            $situacao = "RECUPERAÇÃO";
        }
        else {
            $resposta = "REPROVADO";
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

    


    <form method="POST">
   
    <div>
        <input type="text" id="nome" name="nome">
    </div>

    <div>
        <input type="number" id="idade" name="idade">
    </div>

    <div>      
        <input type="number" id="nota1" name="nota1">
    </div>

    <div>      
        <input type="number" id="nota2" name="nota2">
    </div>

    <div>      
        <input type="number" id="nota3" name="nota3">
    </div>

    <div>      
        <input type="number" id="nota4" name="nota4">
    </div>

    <div>      
        <input type="number" id="nota5" name="nota5">
    </div>


    <button type="submit">Enviar</button>


</form>

</div>
  
<?php if ($situacao != "")  { ?>

    <p> Nome: <?=$nome ?></p>
    <p> Idade: <?=$idade ?></p>
    <p> Média: <?=$media ?></p>
    <h1> <?=$nome?> <?=$situacao ?></h1>
    
    <?php } ?>


        
</body>
</html>