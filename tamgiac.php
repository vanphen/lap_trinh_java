<?php 

class TamGiac{

	public $canh1;
	public $canh2;
	public $canh3;

	public function __construct($_canh1,$_canh2,$_canh3){
		$this->canh1 = $_canh1;
		$this->canh2 = $_canh2;
		$this->canh3 = $_canh3;

	}
	public function show(){
		echo '3 canh cua tam giac lan luot la : '.$this->canh1.','.$this->canh2.','.$this->canh3.'<br>';

	}

	public function chuVi(){
		return ($this->canh1+$this->canh2+$this->canh3);
	}
	public function dienTich(){
		$nuachivi = $this->chuVi()/2;
		
		return (sqrt($nuachivi*($nuachivi-$this->canh1)*($nuachivi-$this->canh2)*($nuachivi-$this->canh3)));
	}




}

$tamgiac = new TamGiac(3,4,5);

$tamgiac->show();

echo 'dien tich tam giac = '.$tamgiac->dienTich();




 ?>