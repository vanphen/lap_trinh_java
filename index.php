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

	public function add($phanso){
		$phanso->tu = $this->tu * $phanso->mau + $phanso->tu*$this->mau;
		$phanso->mau= $this->mau * $phanso->mau;

		return $phanso;


		
	}



}

$phanso1 = new Fraction(1,2);

$phanso2 = new Fraction(4,2);

$phanso3 = new Fraction(1,2);

$phanso4 = new Fraction(1,2);



$phanso3 = $phanso1->add($phanso2);

echo $phanso3->show();


echo '<br>';

$phanso4 = $phanso1->add($phanso3);

echo $phanso4->show();







 ?>