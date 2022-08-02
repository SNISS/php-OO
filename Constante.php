<?php

class Pessoa{

    const nome = "Rodrigo"; //Criando constante



public function exibirNome(){

    echo self::nome; //Referenciar Constante
} 



}

class Rodrigo extends Pessoa{

    const nome = "Oliveira";


    public function exibirNome(){

        echo parent::nome; //Vai mostrar o valor do nome na classe pai (Pessoa) 
    } 
    


}

$pessoa = new Pessoa;
$pessoa->exibirNome;
?>