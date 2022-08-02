
<?php


class Pessoa{

    public $nome;
    public $idade;
    public $pais;

    public function Falar(){

        //$this-> usado para mostrar um atributo em um echo
        echo $this->nome." de ".$this->idade." acabou de falar <br>";
    }    

}


$rodrigo = new Pessoa();
//$rodrigo == Objeto

$rodrigo->nome = "Rodrigo Santos"; //Dando valor ao atributo nome nesse objeto

$rodrigo->idade = 25; //Dando valor ao atributo idade nesse objeto

$rodrigo->Falar(); //Chamando a função falou


?>