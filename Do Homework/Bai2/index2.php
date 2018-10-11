<?php
require "bai2.php";
class TuKhoa{
	public $Khoa;
	public function __construct($Khoa){
		$this->Khoa = $Khoa;
	}

	public function getTuKhoa(){
		return $this->TuKhoa;
	}
}
?>