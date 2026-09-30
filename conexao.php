<?php //BASE PARA COPIAR E COLAR - CODIGO PARA ERRO


// dados para conexão mysql
$host = "localhost";
$banco ="ticiana315";
$usuario = "ticiana315";
$senha = "315!@#";

// pdo = ferramenta do proprio PHP raiz para conversar com o BD
// PDO = php data objets

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco; charset=utf8mb4", $usuario, $senha ); // depois da , puxa a variavel do usuario e puxa a v de senha
    $pdo->setAttribute( // -> estamos acessando alguma coisa que está dentro desse objeto

        PDO::ATTR_ERRMODE, // É PARA CONFIGURAR O MODO DE ERRO DO POD
        PDO::ERRMODE_EXCEPTION // PARA QUANDO ACONTECER ALGUM ERRO, TRNAFORMAR EM EXECUÇÃO


    ) ;

 echo "CONECTADO AO SERVIDOR!";

     } catch (PDOException $erro) {  // tipo de erro que queremos capturar

echo "Erro ao conectar:" .$erro-> getMessage();

} 

?>