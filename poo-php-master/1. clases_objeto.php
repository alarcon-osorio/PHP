<?php

  class Empleado{
  
  private $nombre;
  private $sueldo;

  public function inicializar($nombre, $sueldo){
    $this->nombre = $nombre;
    $this->sueldo = $sueldo;
  } 

  public function imprimir(){
    echo $this->nombre;
    if($this->sueldo >= 3000000){
       echo " - Paga impuesto ya que el sueldo es: $" . $this->sueldo . "</br>";
     }else{
		 echo " - No paga impuesto ya que el sueldo es: $" . $this->sueldo . "</br>";
	 }

    }
  }

$empleado = new Empleado();
$empleado->inicializar("Jeison","5000000");
$empleado->imprimir();
$empleado2 = new Empleado();
$empleado2->inicializar("Daniel","2000000");
$empleado2->imprimir();
?>