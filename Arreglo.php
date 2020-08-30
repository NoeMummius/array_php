<?php
class Arreglo
{
 private $Arreglo;
 public function __constructor()
 {
  $this->Arreglo = array();
 }
 public function __constructor($n)
 {
  $this->Arreglo = array();
  for($i = 0; $i < $n; $i++)
  {
   $this->Array[i] = rand();
  }
 }
 public function ordena();
 public function cuenta();
 public function medVar();
 public function mostrar();
}
?>
