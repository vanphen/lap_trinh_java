<?php 

class Fraction{

	public $tu;
	public $mau;




	public   function __construct($_tu,$_mau)
	{
		if($_mau == 0){
			echo 'mau khong the la 0';
			return ;
		}else{
			$this->tu = $_tu;
			$this->mau = $_mau;
		}
		
	}









	public function show(){
		$ucln = $this->USCLN($this->tu,$this->mau);
		$this->tu /=$ucln;
		$this->mau /=$ucln;
		if($this->mau==1){
			return $this->tu;
		}
		else{
			return $this->tu.'/'.$this->mau;
		}
		
	}

	public	function USCLN($__tu, $__mau) {
		if ($__mau == 0) return $__tu;
		return $this->USCLN($__mau, $__tu % $__mau);
	}

	public function add($phanso){
		
	
		$tu = ($this->tu * $phanso->mau + $phanso->tu*$this->mau);
		$mau= ($this->mau * $phanso->mau);

		return new Fraction($tu,$mau);

		
	}

	public function sub($phanso){
	
	
		$tu = $this->tu * $phanso->mau - $phanso->tu*$this->mau;
		$mau= $this->mau * $phanso->mau;

		return new Fraction($tu,$mau);

	}


	public function mul($phanso){

	
	
		$tu = ($this->tu * $phanso->tu);
		$mau= ($this->mau * $phanso->mau);

		return new Fraction($tu,$mau);

	}


	public function div($phanso){
	

		$tu = ($this->tu * $phanso->mau);
		$mau= ($this->mau * $phanso->tu);

		return new Fraction($tu,$mau);

	}








}

$phanso1 = new Fraction(4,2);

$phanso2 = new Fraction(4,2);

$phanso3 = new Fraction(1,2);





$phanso3 = $phanso1->add($phanso2);

echo $phanso3->show();














 ?>