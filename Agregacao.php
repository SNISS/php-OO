<?php

//Agregacao

//Quando uma classe precisa de outra para executar sua ação, ou seja, uma classe ultiliza a outra
//como parte de si propia



class Produtos{

    public $name;
    public $valor;


    function __construct($nome,$valor){

        $this->name = $nome;

        $this->valor = $valor;
    }
}


class Carrinho{

    public $produtos;

    //  Agregação
    public function adiciona(Produtos $produto){

        $this->produto[] = $produto;

    }

    public function  exibe(){

        foreach ($this->produtos as $produto){

            echo $produto->name."<br>";
            echo $produto->valor."<hr>";
        }
    }
}


$produto1 = new Produtos("Notebook", "1500");

$produto2 = new Produtos("Mouse", "50");
$carrinho = new Carrinho();

$carrinho->adiciona($produto1);

$carrinho->adiciona($produto2);


$carrinho->exibe();
?>