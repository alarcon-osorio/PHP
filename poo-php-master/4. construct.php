<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  public function __construct($tit,$ubi){ //lleva los parametros en la clase
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
  }
  public function graficar(){
    echo '<div style="font-size:40px;text-align:'.$this->ubicacion.'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina('El blog del programador','center');
$cabecera->graficar();
?>