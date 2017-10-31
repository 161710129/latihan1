<?php
class perkalian{
	public $per1,$per2;

	public function set_perkalian($perkalian1, $perkalian2)
	{
		$this->per1 = $perkalian1;
		$this->per2 = $perkalian2;
	}
	public function get_perkalian()
	{
		return $this->per1 * $this->per2;
	}

}
?>