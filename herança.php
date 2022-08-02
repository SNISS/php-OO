<?php


/*
 Herança é um recurso que permite que classes compartilhem atributos e metodos  afim de 
reaproveitar codigos e comportamentos generalizados

*/

class Veiculo{
    
    public $modelo;
    public $cor;
    public $ano;

    public function Andar(){

        echo "Andou";

    }

    public function Parar(){

        echo "Parou";

    }
}

class Carro extends Veiculo{


    public function LimparVidro (){

        echo "Limpando o vidro";
    }

}

class Moto extends Veiculo{

    public function DarGrau(){

        echo "Dando grau";
    }

}
 
$carro = new Carro();

$carro->modelo = "Gol";

$carro->cor  = "Vermelho";

$carro->ano = 2018;

$carro->Andar();
echo "<br>";
$carro->LimparVidro();
echo "<hr>";

$moto = new Moto();

$moto->modelo = "Honda";

$moto->cor  = "Rosa";

$moto->ano = 2014;

echo "<br>";
$moto->Parar();

echo "<br>";

$moto->DarGrau();
?>