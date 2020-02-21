<?php
class Persona {
  private $nombre;
  private $edad;
 
 public function fijarNombreEdad($nom,$ed)
  {
    $this->nombre=$nom;
    $this->edad=$ed;
  }
  public function retornarNombre()
  {
    return $this->nombre;
  }
  public function retornarEdad()
  {
    return $this->edad;
  }
  public function __clone()
  {
    $this->edad=0;
  }
}

$persona1=new Persona();
$persona1->fijarNombreEdad('Juan',20);
echo 'Datos de $persona1:';
echo $persona1->retornarNombre().' - '.$persona1->retornarEdad().'<br>';
$persona2=clone($persona1);
echo 'Datos de $persona2:';
echo $persona2->retornarNombre().' - '.$persona2->retornarEdad().'<br>';
?>