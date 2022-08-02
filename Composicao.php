<?php

//Na composição uma classe cria instancia de outra classe dentro de si propia, sendo assim quando 
//El for destruida , a outra classe tbm será




class Pessoa{

    public function atribuirNome($nome){

        return "O nome da pessoa é ".$nome;
    }
}

class Exibe{

    public $pessoa;
    public $nome;

    function __construct($nome){

        $this->pessoa = new Pessoa();
        $this->nome = $nome;

    }

    public function exibeNome(){

        echo $this->pessoa->atribuirNome($this->nome);
    }
}


$exibe = new Exibe("José");

$exibe->exibeNome();
?>