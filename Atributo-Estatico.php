<?php

class Login{

   public static $user;
   
   public static function verificaLogin(){


    echo "Usuario ".self::$user." logado"; //Em atributos static não podemos usar o $this

   }

}

Login::$user= "admin"; //Dar valor ao usuario no static 
Login::verificaLogin(); //chamar função verificaLogin com metodo estatico

?>