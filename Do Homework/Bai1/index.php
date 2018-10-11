<?php
require "bai1.php";
	class Ten{
	public $HoTen;
	public function __construct($HoTen){
		$this->HoTen = $HoTen;
	}

	public function getHoTen(){
		return $this->HoTen;
	}
}
$Ten1 = new Ten($HoTen);
echo $Ten1->getHoTen();
?>