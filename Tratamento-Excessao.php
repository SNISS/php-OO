<?php
/*
Ocorrencia anormal que afecta o funcionamento da aplicação
Exception é a classe base para todas as Exceptions

message,code,file,line

*/


class Newsletter{

    public function cadastrarEmail($email){

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

            throw new Exception("Este é invalido", 1);

            
        }else{
            echo "Email cadastrado com sucesso";
        }
    }
}


$newsletter = new Newsletter();

try{ //try = tente
$newsletter->cadastrarEmail("jorge@");


}catch(Exception $e){ //catch = Se não conseguir executar o try

    echo "Mensagem: ".$e->getMessage()."<br>";
    echo "Codigo: ".$e->getCode()."<br>";
    echo "Linha: ".$e->getLine()."<br>";
    echo "Arquivo: ".$e->getFile()."<br>";
}

?>