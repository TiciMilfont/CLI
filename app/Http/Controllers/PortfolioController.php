<?php

class PortfolioController
{
    public function index() {
        require __DIR__ . "/../../../resources/views/portfolio.php";
    }
    public function idade() {
        require __DIR__ . "/../../../resources/views/projetos/idade.php";
    }
    public function jogos() {
        require __DIR__ . "/../../../resources/views/projetos/jogos.php";
    }
    public function login_basico() {
        require __DIR__ . "/../../../resources/views/projetos/login-basico.php";
    }
    public function notas() {
        require __DIR__ . "/../../../resources/views/projetos/notas.php";
    }
    public function teste_post() {
        require __DIR__ . "/../../../resources/views/projetos/teste_post.php";
    }
    public function desafio_notas() {
        require __DIR__ . "/../../../resources/views/projetos/desafios_notas.php";
    }
}

?>