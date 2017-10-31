<?php
class orang{
	public $nama;
	public $tempatlahir;
	public $kelas;
	public $status;
    public $alamat;


	public function __construct($nama,$tempatlahir,$kelas,$status,$alamat){
		$this->nama = $nama;
		$this->tempatlahir = $tempatlahir;
		$this->kelas = $kelas;
		$this->status = $status;
		$this->alamat = $alamat;


	}
	public function get_nama (){
		return $this->nama;

		}
	public function get_tempatlahir (){
		return $this->tempatlahir;
	}
	public function get_kelas (){
		return $this->kelas;
	}
	public function get_status (){
		return $this->status;
		}
	public function get_alamat (){
		return $this->alamat;


	
}
}
?>