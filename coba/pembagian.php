<?php
class pembagian{
	public $pem1,$pem2;

	public function set_pembagian($pembagian1, $pembagian2)
	{
		$this->pem1 = $pembagian1;
		$this->pem2 = $pembagian2;
	}
	public function get_pembagian()
	{
		return $this->pem1 / $this->pem2;
	}

}
?>