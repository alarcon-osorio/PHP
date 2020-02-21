<?php
class CabeceraPagina {
  private $titulo;
  private $ubicacion;
  private $font;
  
  public function inicializar($tit,$ubi,$font){
    $this->titulo=$tit;
    $this->ubicacion=$ubi;
	$this->font=$font;
  }
  public function graficar(){
    echo '<div style="font-size:' . $this->font . 'px;text-align:'. $this->ubicacion .'">';
    echo $this->titulo;
    echo '</div>';
  }
}

$cabecera=new CabeceraPagina();
$cabecera->inicializar('El blog del programador','center', 100);
$cabecera->graficar();
?>