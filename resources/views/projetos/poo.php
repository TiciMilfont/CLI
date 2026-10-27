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
    private $vida; // aqui o private protege a informação
   public $dano;
}

    public function __construct($nome, $vida, $dano) {
        $this->nome = $nome;
       $this->vida = $vida;
     $this->dano = $dano;
    }

       // GETTER
public function getVida() {
    return $this->vida; //$vida atualiza a vida somente se o valor for válido
}

// SETTER
public function setVida($vida) { //essa é uma aplicação do encapsulamento: como $vida é private, você controla sua alteração pelo método setVida().
    if ($vida < 0) {
        echo "a vida não pode ser negativa. /";
        return;
}

   public function atacar() {
        echo "$this->nome realizou um ataque!";
    }

 
}


$lucas->atacar(); // método próprio

class Guerreiro extends Personagem {  // metodo herdado da classe personagem


     // Sobrepondo o método da classe pai
     public function atacar() {
        echo "$this->nome atacou com uma espada de São Jorge!\n";
    }

    public function defender() {
        echo "$this->nome levantou o escudo de Ogum!";
    }
}

class mago extends Personagem {
    public function atacar () {
        //subscrevendo o metodo da calsse pai
        echo "$this->nome lançou uma bola de fogo!O calor tá de matar! \n";
    }
}

$guerreiro = new Guerreiro("Lucas", 100, 10);
$lucas -> setVida(50); // add 50 de vida para lucas pelo método setVida().
$mago = new Mago("Aurora", 80, 20);
$personagem = new Personagem("Lira", 50, 5);

$guerreiro->atacar();   // método herdado
$guerreiro->defender(); // método próprio


//1. O que é uma classe?
//Um molde para criar objetos

//2. O que significa new Personagem()?
//Criar um objeto da classe Personagem

//3. Para que serve $this->nome?
//Acessar o nome do objeto atual

//4. O que significa extends?
//Herdar características e métodos de outra classe


//ENCAPSULAMENTO
//Proteger informações para que não sejam alteradas de qualquer jeito.
//HERANÇA
//Criar uma classe nova aproveitando características de outra.
//POLIMORFISMO
//Permitir que objetos diferentes respondam à mesma ação de maneiras diferentes.
//ABSTRAÇÃO
//Mostrar o que é necessário e esconder detalhes complicados de funcionamento.





?>
