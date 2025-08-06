<?php
 
 class Calculadora {
  // propriedade/ atributo
   public $resultado = 0;
    //função/metodo
    public function somar($valor1, $valor2) {
      $this->resultado = $valor1 + $valor2;
    }   
      public function diminuir($valor1, $valor2) {
      $this->resultado = $valor1 - $valor2;
    }
     
     public function multiplicar($valor1, $valor2) {
      $this->resultado = $valor1 * $valor2;
    }
    
     public function dividir($valor1, $valor2) {
      $this->resultado = $valor1 / $valor2;
    }

    public function exibir() {
      echo $this->resultado;
    }
 }

 $objectCalculadora = new Calculadora();
 $objectCalculadora->somar(10, 10);
 $objectCalculadora->exibir();