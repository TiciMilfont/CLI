


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.index.css">
</head>
<body>
  

<div class="menu-container">
    <h1>MENU DE PROJETOS</h1>

<a href="idade.php"> Verificador de idade </a>
<a href="notas.php"> Cadastro Aluno e Notas </a>
<a href="desafio.notas.php"> Desafio POST -> GET </a>
<a href="login-basico.php"> LOGIN </a>


        
</body>
</html>


<?php

require "conexao.php";
echo "<br> Meu sistema está conectado!";

$sql = " CREATE TABLE IF NOT EXISTS  teste (
id  INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(100),
idade INT 
)"; // primeira tabela criada no projeto

$pdo->exec($sql);

echo "<br>Tabela criada com sucesso!";

?>