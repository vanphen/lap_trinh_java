<?php 

class Fraction{

	public $tu;
	public $mau;

	public function __construct($_tu,$_mau){
			if($_mau == 0){
			echo 'mau khong the la 0';
			return 0;
		}else{
			$this->tu = $_tu;
			$this->mau = $_mau;
			
		}
	}

	public function show(){
		return $this->tu.'/'.$this->mau;
	}

	// public function add($_tu,$_mau){
	// 	return ($this->tu*$_mau + $_tu *$this->mau)/($this->mau * $_mau);
	// }



}

$phanso1 = new Fraction(1,2);

$phanso2 = new Fraction(3,2);


echo $phanso2->show();





 ?>