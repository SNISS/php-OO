<?php
/*

public -fará com que  não haja ocultação nenhuma, toda propriedade ou  metodo declarado com o public serão
acessiveis por todos que quiserem acessalós


protected - visibilidade protected faz com que todos os herdeiros vejam as propiedades ou metodos protegidos como se
fossem publicos


private - ao contrario do public , esse modificador faz com que qualquer metodo ou propiedade se só e somente só
pela classe que a declarou só conseguimos acessar dentro da classe 
*/


class Veiculo{

    protected $carro;

    public function setCarro($c){

        $this->carro=$c;
    }

    public function getCarro(){

        return $this->modelo;
    }
}


$veiculo = new Veiculo;

$veiculo->setCarr("Honda");

echo $veiculo->getCarro(); 



echo "<hr>";

echo "<br>";





//Public 

class Jogo{

    public $jogo;



}



$doom = new Jogo;


$doom->jogo = "Doom";

echo $doom->jogo;
?>