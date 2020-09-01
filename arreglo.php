<?php
class Arreglo
{
 private $Arreglo;
 public function __constructor($Arreglo)
 {
  $this->Arreglo = $Arreglo;
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
 public function cuenta()
 {
  $Contadores = array();
   for($i = 0; $i < sizeof($this->Arreglo); $i++)
   {
    $Contadores[i] = 0;
   }
   for($i = 0; $i < sizeof($this->Arreglo); $i++)
   {
     for($j = 0; $j < sizeof($this->Arreglo); $j++)
     {
      if($this->Arreglo[j] == $this->Arreglo[i])
      {
       $Contadores[i]++;
      }
     }
   }
  for($i = 0; $i < sizeof($this->Arreglo); $i++)
  {
   echo "El numero de ".$this->Arreglo[i]."es ".$Contadores[i]."<br>";
  }
 }
 public function medVar();
 public function mostrar()
 {
  for($i = 0; $i < sizeof($this->Arreglo); $i++)
  {
   echo $this->Arreglo[i].', ';
  }
  echo '<br>';
 }
}
?>
