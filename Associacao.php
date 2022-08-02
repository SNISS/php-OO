<?php

// Associação

//Acontece quando um objeto "ultiliza" outro, porém, sem que eles dependam um do outro


class Pedido{

    public $numero;
    public $cliente;
}

class Cliente{

    public $nome;
    public $endereco;
}


$cliente = new Cliente();

$cliente->nome = "Rodrigo";

$cliente->endereco = "Rua xxx, Numero : 157";


$pedido = new Pedido();

$pedido->numero = "123";

$pedido->cliente = $cliente;

$dados = array(

    'numero' => $pedido->numero,
    'nome_cliente' =>  $pedido->cliente->nome,
    'endereco_cliente' => $pedido->$cliente->endereco

)

?>