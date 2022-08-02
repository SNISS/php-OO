<?php

//Getters e setters são métodos usados ​​para definir ou recuperar os valores de variáveis, normalmente privadas

class Login{

    private $email;
    private $senha;

    //Get
    public function getEmail(){

        return $this->email;
    }

    //Sett
    public  function setEmail($e){
        
        $email = filter_var($e, FILTER_SANITIZE_EMAIL); //Filtrando dados com filter_var 
        $this->email = $email;

    }

 ///Get
    public function getSenha(){

        return $this->senha;
    }

    //Set
    public function setSenha($s){

        $senha = filter_var($e, FILTER_SANITIZE_EMAIL); //FIltrando dados com filter_var
        $this->senha = $senha;
    }

    public function Logar(){

        if($this->email == "teste@teste.com" and $this->senha == "123456"){

            echo "Logado com Sucesso";
        }else{

            echo "Dados Invalidos";
        }
    }
}

$logar = new Login();



$logar->setEmail("teste()/@teste.com");

$logar->setSenha("123456");

$logar->Logar();
echo "<br>";

echo $logar->getEmail();
echo "<br>";
echo $logar->getSenha();
?>