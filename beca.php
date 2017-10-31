<?php
class beca {

	public $roda;
	public $berat;

	public function __construct($roda,$berat){
		$this->roda = $roda;
		$this->berat = $berat;

	}
	public function set_roda($roda){
		$this->roda = $roda;
	}

	public function get_roda (){
		return $this->roda;
	}

	public function set_berat($berat){
		$this->berat = $berat;
	}

	public function get_berat (){
		return $this->berat;
	}
}

?>