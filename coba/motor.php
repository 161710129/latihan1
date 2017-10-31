<?php
 class motor{

 public $suara ="brobotttt";
 public $roda =2;
 public $setang =2;

 public function suara()
 {
 	return $this->suara;
 }
 public function roda()
 {
 	return $this->roda;
 }
 public function setang()
 {
 	return $this->setang;
 }
 public function roda2()
 {
 	$a = 2;
 	return $a +$this->setang;
 }
 }
 
 // set property
 $motor = new motor;
 echo "</br>";
 echo "bunyi motor :".$motor->suara ;
 echo "</br>";
 echo "roda motor :".$motor->roda ;
 echo "</br>";
 echo "setang motor :".$motor->setang ;
 // tampilan property
  echo "<br />";
     echo $motor->suara;
 echo "<br />";
 echo $motor->roda;
 echo "<br />";
 echo $motor->setang;
 echo "<br />";

 
 ?>