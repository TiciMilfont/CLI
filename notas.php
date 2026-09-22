


<?php
$nome = "nome";
        $idade = "idade";
        $soma_da_nota = "soma_da_nota";
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
            $soma_dos_pesos = $peso1 + $peso2 + $peso3 + $peso4 + $peso5;
            $media = $soma_da_nota / $soma_dos_pesos;


        if ($media >= 7) {
            $situacao = "APROVADO(A).";
        }

        else if ($media >= 5 && $media <= 7) {
            $situacao = " em RECUPERAÇÃO.";
        }
        else {
            $situacao = "REPROVADO(A).";
        }   }  

        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style_notas.css">
</head>
<body>

<a href="index.php" class="btn-voltar">← Voltar para o Menu</a> <!-- potão voltar -->

<!-- O CONTEÚDO PRINCIPAL DEVE ENVOLVER OS DOIS BLOCOS IGUALMENTE -->
<main class="conteudo-principal">
    
<div class="container">

    
<main class="conteudo-principal">

    <form method="POST">
   
    <div>
        <label for="nome">NOME:</label>
        <input type="text" id="nome" name="nome">
    </div>

    <div>
        <label for="idade">IDADE:</label>
        <input type="number" id="idade" name="idade" step="any" min="1" required
           oninvalid="this.setCustomValidity('Por favor, insira uma idade válida.')"
           oninput="this.setCustomValidity('')">
    </div>

    <div> 
        <label for="nota1">NOTA 1:</label>     
        <input type="number" id="nota1" name="nota1" step="any" min="0" max="10" required
           oninvalid="this.setCustomValidity('Por favor, insira uma nota válida entre 0 e 10.')"
           oninput="this.setCustomValidity('')">
    </div>

    <div>
        <label for="nota2">NOTA 2:</label>      
        <input type="number" id="nota2" name="nota2" step="any" min="0" max="10" required
           oninvalid="this.setCustomValidity('Por favor, insira uma nota válida entre 0 e 10.')"
           oninput="this.setCustomValidity('')">
    </div>

    <div> 
        <label for="nota3">Nota 3:</label>     
        <input type="number" id="nota3" name="nota3" step="any" min="0" max="10" required
           oninvalid="this.setCustomValidity('Por favor, insira uma nota válida entre 0 e 10.')"
           oninput="this.setCustomValidity('')">
    </div>

    <div> 
        <label for="nota4">NOTA 4::</label>     
        <input type="number" id="nota4" name="nota4" step="any" min="0" max="10" required
           oninvalid="this.setCustomValidity('Por favor, insira uma nota válida entre 0 e 10.')"
           oninput="this.setCustomValidity('')">
    </div>

    <div>   
        <label for="nota5">NOTA 5:</label>   
        <input type="number" id="nota5" name="nota5" step="any" min="0" max="10"required
           oninvalid="this.setCustomValidity('Por favor, insira uma nota válida entre 0 e 10.')"
           oninput="this.setCustomValidity('')">
    </div>


    <button type="submit">Enviar</button>


</form>

</div>
  
<?php if ($situacao != "")  { ?>
    <div class="card-ficha">
            <h2>FICHA DO ALUNO</h2>
            <div class="ficha-detalhes">

    <p> Nome: <?=$nome ?></p>
    <p> Idade: <?=$idade ?></p>
    <p> Média: <?=$media ?></p>
    <h1> <?=$nome?> está <?=$situacao ?></h1>
    
    <?php } ?>


        
</body>
</html>