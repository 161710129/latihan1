<?php  


class segitiga{
	public $alas,$tinggi,$bagi;

	function set_nilai($bilangan1, $bilangan2, $bilangan3){
		$this->alas = $bilangan1;
		$this->tinggi = $bilangan2;
		$this->bagi = $bilangan3;
	}
	function get_nilai(){
		return $this->alas * $this->tinggi / $this->bagi;
	}
}

$penjumlahan1 = new segitiga;
$penjumlahan1->set_nilai(10,10,2);
echo "<h3>Bangun Datar : </h3>";
echo "Luas Segitiga  (Alas=10 * Tinggi=10 / 2) : " .$penjumlahan1->get_nilai().'<br>';

class persegi{
	public $sisi1,$sisi;

	function set_nilai($bilangan1, $bilangan2){
		$this->sisi1 = $bilangan1;
		$this->sisi = $bilangan2;
	}
	function get_nilai(){
		return $this->sisi1 * $this->sisi;
	}
	function get_nilai2(){
		return ($this->sisi1 )*4;
	}
}

$penjumlahan1 = new persegi;
$penjumlahan1->set_nilai(10,10);
echo "Luas Persegi (Sisi=10 * Sisi=10) : " .$penjumlahan1->get_nilai().'<br>';
echo "Keliling Persegi (4 * Sisi=10) : " .$penjumlahan1->get_nilai2().'<br>';

class persegi_panjang{
	public $panjang,$lebar;

	function set_nilai($bilangan1, $bilangan2){
		$this->panjang = $bilangan1;
		$this->lebar = $bilangan2;
	}
	function get_nilai(){
		return $this->panjang * $this->lebar;
	}
	function get_nilai2(){
		return ($this->panjang + $this->lebar)*2;
	}
}

$penjumlahan1 = new persegi_panjang;
$penjumlahan1->set_nilai(10,10);
echo "Luas Persegi Panjang (Panjang=10 * Lebar=10) :  " .$penjumlahan1->get_nilai().'<br>';
echo "Keliling Persegi Panjang (Panjang=10 + Lebar=10 * 2) :  " .$penjumlahan1->get_nilai2().'<br>';


?>