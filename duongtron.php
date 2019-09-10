<?php 

class DuongTron{
	public $hoanhdotam;
	public $tungdotam;
	public $bankinh;
	const pi = 3.14;

	public function __construct($_hoanhdotam,$_tungdotam,$_bankinh){
		$this->hoanhdotam = $_hoanhdotam;
		$this->tungdotam = $_tungdotam;
		$this->bankinh = $_bankinh;


	}

	public function show(){
		echo 'duong tron co tam la :('.$this->hoanhdotam.','.$this->tungdotam.') va co ban kinh = '.$this->bankinh;
	
		
	}
	public function dienTich(){
		return (self::pi* pow($this->bankinh,2));
	}

	public function chuVi(){
		return (self::pi *2 * $this->bankinh);
	}

	public function kiemtra($tungdo,$hoanhdo){
		$khoangcach = sqrt(pow($tungdo-$this->hoanhdotam, 2)+(pow($hoanhdo-$this->tungdotam, 2)));
		if($khoangcach <= $this->bankinh){
			echo 'diem ('.$tungdo.','.$hoanhdo.') co thuoc duong tron';

		}else{
			echo 'diem ('.$tungdo.','.$hoanhdo.') khong thuoc duong tron';
		}
	}
}

$duongtron = new DuongTron(1,1,5);

$duongtron->kiemtra(10,10);


 ?>