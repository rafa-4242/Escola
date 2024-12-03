<?php
   class Pessoa{
      Public $nome;
      Public $idade;
      Public $altura;

      public function acessardados(){
        echo($this -> nome);
        echo($this -> idade);
        echo($this -> altura);
      }

   }
?>