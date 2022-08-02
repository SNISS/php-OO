<?php

//Abstract classe que serve como modelo
abstract class  Banco{

    protected $saldo;
    protected $limiteSaque;
    protected $juros;
    
    
    //Podemos usar essa função em classes que são de modelo  porém ela não é obrigatorio
    public function setSaldo($sa){

        $this->saldo = $sa;

    }

    //Todos que usarem  o modelo Banco vão ser obrigatorios a terem a  função Sacar e Depositar 

    abstract protected function Sacar($s);

    abstract protected function  Depoisitar();
}

//Esta pegando o modelo Banco

class Itau extends Banco{


    public function Sacar($s){
    
    
        $this->saldo -= $s; //$this->saldo -= $s    =======  $this->saldo = $this->saldo - $s 
    
    }

    public function Depositar(){

        echo "Depositou";
    }
}



$itau = new Itau;
$itau->
?>