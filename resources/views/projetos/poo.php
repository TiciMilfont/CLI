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
class Personagem {
    public $nome;
    public $vida = 100;

    public function atacar() {
        echo "$this->nome realizou um ataque!";
    }
}

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
$aurora = new Personagem("Aurora", 50, 5);
$chloe = new Personagem("Chloe", 30, 3);

?>


?>