<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo ?? 'Portfólio - Lucas Luz'; ?></title>
    <!-- CSS unificado da pasta css (agora minúscula como na imagem) -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>

    <!-- MENU DE NAVEGAÇÃO FIXO (Copiado da sua tela) -->
    <header>
        <nav class="navbar">
            <h2 class="logo">Meu Portfólio</h2>
            <ul class="menu">
                <li><a href="#inicio">Início</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#habilidades">Habilidades</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
            </ul>
        </nav>
    </header>

    <!-- O CONTEÚDO DINÂMICO ENTRA AQUI -->
    <main>
        <?php echo $conteudo; ?>
    </main>

</body>
</html>
