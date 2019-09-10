<?php 

class Point2D{

	public $hoanhdo;
	public $tungdo;

	public function __construct($_hoanhdo,$_tungdo){
		$this->hoanhdo = $_hoanhdo;
		$this->tungdo = $_tungdo;

	}

	public function show(){
		echo 'Diem ('.$this->hoanhdo.','.$this->tungdo.')<br>';
	}

	public function doDai($diem){
		$dodai = sqrt(pow($diem->hoanhdo-$this->hoanhdo, 2)+(pow($diem->tungdo-$this->tungdo, 2)));
		return $dodai;
	}

}

class Point3D extends Point2D{
	public $caodo;

	public function __construct($_hoanhdo,$_tungdo,$_caodo){
		$this->caodo = $_caodo;
		$this->hoanhdo = $_hoanhdo;
		$this->tungdo = $_tungdo;
	}

	public function show(){
		echo 'Diem A('.$this->hoanhdo.','.$this->tungdo.','.$this->caodo.')<br>';
	}

	public function doDai($diem){
		$dodai = sqrt(pow($diem->hoanhdo-$this->hoanhdo, 2)+(pow($diem->tungdo-$this->tungdo, 2))+(pow($diem->caodo-$this->caodo, 2)));
		return $dodai;
	}



} 

class TamGiac{
	public $diema;
	public $diemb;
	public $diemc;

	public function __construct($a,$b,$c){

        $ab = $a->doDai($b);
        $bc = $b->doDai($c);
        $ac = $a->doDai($c);


		if(($ab+$bc)>$ac || ($bc+$ac)>$ab || ($ab+$ac)>$bc ){
			$this->diema = $a;
			$this->diemb = $b;
			$this->diemc = $c;
			
		}else{ 
			    echo '3 diem khong phai la tam giac <br>';
				return;
		}


		}
		public function show(){

			echo '3 diem lan luot la :'.'A('.$this->diema->hoanhdo.','.$this->diema->tungdo.'),'.'B('.$this->diemb->hoanhdo.','.$this->diemb->tungdo.'),'.'B('.$this->diemc->hoanhdo.','.$this->diemc->tungdo.')'.'<br>';
			
			

		}

		public function dienTich(){
		
			$dientich = 0.5*abs(($this->diemb->hoanhdo-$this->diema->hoanhdo)*($this->diemc->tungdo-$this->diema->tungdo)-($this->diemc->hoanhdo-$this->diema->hoanhdo)*($this->diemb->tungdo-$this->diema->tungdo));

			return $dientich;
			

		}
		public function chuVi(){

				return  ($this->diema->doDai($this->diemb)+$this->diemb->doDai($this->diemc)+$this->diema->doDai($this->diemc));
		
		}




}

class DuongTron{
	public $tam;
	public $bankinh;
	const pi = 3.14;

	public function __construct($_tam,$_bankinh){
		$this->tam =$_tam;

		$this->bankinh = $_bankinh;


	}

	public function show(){
		echo 'duong tron co tam la :('.$this->tam->hoanhdo.','.$this->tam->tungdo.') va co ban kinh = '.$this->bankinh;
	
		
	}
	public function dienTich(){
		return (self::pi* pow($this->bankinh,2));
	}

	public function chuVi(){
		return (self::pi *2 * $this->bankinh);
	}

	public function kiemtra($diem){
		$khoangcach =$this->tam->doDai($diem);
		if($khoangcach <= $this->bankinh){
			echo 'diem ('.$diem->hoanhdo.','.$diem->tungdo.') co thuoc duong tron';

		}else{
			echo 'diem ('.$diem->hoanhdo.','.$diem->tungdo.') khong thuoc duong tron';
		}
	}
}



$diema = new Point2D(0,0);

$diema->show();
$diemb = new Point2D(3,100);

$diemb->show();
$duongtron = new DuongTron($diema,5);

$duongtron->kiemtra($diemb);




// echo 'do dai 2 diem = '.$diema->doDai($diemb);

// echo '<br>';


// $diemz = new Point3D(1,2,3);

// echo $diemz->show();

// $diemz2 = new Point3D(1,2,5);

// echo $diemz2->show();

// echo 'do dai 2 diem = '.$diemz->doDai($diemz2);

// $diemc = new Point2D(0,4);
// $diemc->show();


// $tamgiac = new TamGiac($diema,$diemb,$diemc);

// $tamgiac->show();

// echo 'dien tich tam giac = '.$tamgiac->dienTich();

// echo '<br>';

// echo 'chu vi tam giac = '.$tamgiac->chuVi();










 ?>