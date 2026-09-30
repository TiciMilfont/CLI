


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
<a href="jogos.php"> LISTA DE JOGOS </a>


        
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

$sql = " CREATE TABLE IF NOT EXISTS  jogos (
    id  INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    genero VARCHAR (10),
    nota INT ,
    ano DATE
    )"; // segunda tabela criada no projeto
    
    $pdo->exec($sql);

    $buscar = " SELECT * FROM jogos"; // buscar todos os jogos registrados no banco de dados

    $stmt = $pdo-> query($buscar); // steitemen, instrução, comando a ser executado , função query= recebe retorno do select || exec= executa algo quando vc n quer retorno

    $jogos= $stmt-> fetchAll(PDO :: FETCH_ASSOC); // para retorno de dados no json



?>