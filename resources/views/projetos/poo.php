<?php
// programação orientada objeto



// exemplo SEM POO
$nome = "Lucas";
$vida = 100;

function atacar($nome) {
    echo "$nome realizou um ataque!";
}

atacar($nome);


// exemplo COM POO
//class Personagem {
   // public $nome;
   // public $vida = 100;

   // public function atacar() {
   //     echo "$this->nome realizou um ataque!";
   // }
//}

//

$personagem1 = new Personagem();
$personagem1->nome = "Lucas";
$personagem1->atacar();

// exemplo COM POO, segunda maneira de usar
class Personagem {
    public $nome;
    public $vida;
    public $dano;

    public function __construct($nome, $vida, $dano) {
        $this->nome = $nome;
        $this->vida = $vida;
        $this->dano = $dano;
    }

    public function atacar() {
        echo "$this->nome realizou um ataque!";
    }
}

$lucas = new Personagem("Lucas", 100, 10);
$ana = new Personagem("Ana", 50, 5);
$chloe = new Personagem("Chloe", 30, 3);

//ENCAPSULAMENTO
//Proteger informações para que não sejam alteradas de qualquer jeito.
//HERANÇA
//Criar uma classe nova aproveitando características de outra.
//POLIMORFISMO
//Permitir que objetos diferentes respondam à mesma ação de maneiras diferentes.
//ABSTRAÇÃO
//Mostrar o que é necessário e esconder detalhes complicados de funcionamento.


$lucas->atacar(); // método próprio

class Guerreiro extends Personagem {  // metodo herdado da classe personagem
    public function defender() {
        echo "$this->nome levantou o escudo!";
    }
}

$guerreiro = new Guerreiro("Lucas", 100, 10);

$guerreiro->atacar();   // método herdado
$guerreiro->defender(); // método próprio


?>


