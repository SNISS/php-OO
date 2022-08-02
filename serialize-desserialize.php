
<?php

/*

A função serialize () converte uma representação armazenável de um valor. 
Serializar dados significa converter um valor em uma sequência de bits 
 de modo que possa ser armazenado em um arquivo

 
A função unserialize() converte de dados serializados em dados reais . 
Ao serializar dados, uma matriz ou um objeto, queremos dizer que convertemos os dados em um formato de texto simples. 
Ao desserializar os dados, nós os convertemos de volta para o código PHP

*/


  class A {
      public $one = 1;

      public function show_one() {
          echo $this->one;
      }
  }



  include("classa.inc");

  $a = new A;
  $s = serialize($a);

  file_put_contents('store', $s);


  include("classa.inc");

  $s = file_get_contents('store');
  $a = unserialize($s);

  $a->show_one();
?>
