<?php
// 1. CONEXÃO E CRIAÇÃO DE TABELA (Sua lógica de banco de dados)
require "conexao.php";

$sql = "CREATE TABLE IF NOT EXISTS teste (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    idade INT 
)"; 

$pdo->exec($sql);


// 2. CONFIGURAÇÃO DA PÁGINA
$titulo = "Ticiana Milfont - Desenvolvedor em Formação";

// 3. INICIA O BUFFER DE CONTEÚDO
ob_start();
?>

<!-- ==============================================
     INÍCIO DO PORTFÓLIO 
     ============================================== -->
<section id="inicio" class="inicio">
    <div class="inicio-conteudo">
        <p class="saudacao">Olá! Eu sou a Ticiana</p> 
        <h1>Ticiana Milfont</h1>
        <h2>Desenvolvedor em formação</h2>
        <p>
            Designer e mestre em História da Arte., 
            
        </p>
    </div>
</section>

<!-- ==============================================
     MENU DE PROJETOS 
     ============================================== -->
<div class="menu-container" style="margin-top: 40px; padding: 20px;">
    <h2>MENU DE PROJETOS</h2>
    <div style="display: flex; flex-direction: column; gap: 10px;">
        <a href="projetos/idade.php"> Verificador de idade </a>
        <a href="projetos/notas.php"> Cadastro Aluno e Notas </a>
        <a href="projetos/desafio.notas.php"> Desafio POST -> GET </a>
        <a href="projetos/login-basico.php"> LOGIN </a>
        <a href="projetos/jogos.php"> LISTA DE JOGOS </a>
    </div>
</div>

<?php
// 4. DESPEJA TODO O HTML ACIMA NA VARIÁVEL $conteudo E CHAMA O LAYOUT
$conteudo = ob_get_clean();
include __DIR__ . '/layout.php';
?>
