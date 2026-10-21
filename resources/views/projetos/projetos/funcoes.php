<?php


// função sem parâmetros
function apresentarSistema() {

echo "Bom-vindo ao Help Desk!";



}

apresentarSistema();


// função com parâmetros
function abrirChamado($nome, $problema) {

echo "$nome abriu chamado : $problema";

}

abrirChamado ("Maria", " Impressoara travou");


// função com retorno
function contarChamados($quantidade) {

 return "Existem $quantidade em aberto!";


}

$resultado = contarChamados (5);
// echo $resultado;






?>