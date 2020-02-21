<?php
class Operacion {
  protected $valor1;
  protected $valor2;
  protected $resultado;
  
  public function cargar1($v){
    $this->valor1=$v;
  }
  public function cargar2($v){
    $this->valor2=$v;
  }
  public function imprimirResultado(){
    echo $this->resultado.'<br>';
  }
}

class Suma extends Operacion{
  public function operar(){
    $this->resultado=$this->valor1+$this->valor2;
  }
  public function imprimirResultado(){
    echo "La suma de $this->valor1 y $this->valor2 es:";
    parent::imprimirResultado();
  }
}

class Resta extends Operacion{
  public function operar(){
    $this->resultado=$this->valor1-$this->valor2;
  }
  public function imprimirResultado(){
    echo "La diferencia de $this->valor1 y $this->valor2 es:";
    parent::imprimirResultado();
  }
}

$suma=new Suma();
$suma->cargar1(10);
$suma->cargar2(10);
$suma->operar();
$suma->imprimirResultado();

$resta=new Resta();
$resta->cargar1(10);
$resta->cargar2(5);
$resta->operar();
$resta->imprimirResultado();
?>