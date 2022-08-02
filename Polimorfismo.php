<?php 

//Polimorfismo é a gente substituir ou reescrever um metodo erdado


class Animal{

    public  function Andar(){

        echo "O animal andou";
    }
}

class Cavalo extends Animal{

    public function Andar(){

        echo "O cavalo andou";
    }
}
?>