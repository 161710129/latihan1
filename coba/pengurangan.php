<?php
class pengurangan{
	public $pen1,$pen2;

	public function set_pengurangan($pengurangan1, $pengurangan2)
	{
		$this->pen1 = $pengurangan1;
		$this->pen2 = $pengurangan2;
	}
	public function get_pengurangan()
	{
		return $this->pen1 - $this->pen2;
	}

}
?>