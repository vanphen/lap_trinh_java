<?php 

class Fraction{

	public $tu;
	public $mau;



	// public function __construct($_tu,$_mau){
	// 		if($_mau == 0){
	// 		echo 'mau khong the la 0';
	// 		return 0;
	// 	}else{
	// 		$this->tu = $_tu;
	// 		$this->mau = $_mau;
			
	// 	}
	// }



	public function __call($nameMethod,$_count){
		if ($nameMethod == '__construct' ) {
			switch (count($_count)) {
				case 0:
					// code...
					break;
				case 1:

					break;
				case 2:
					if($_count[1]==0){
						echo 'mau khong the la 0';
						break;
					}else{
					    $this->tu = $_count[0];
						$this->mau = $_count[1];
						break;
					}

				
				
			}
			
		}
	}




	public function show(){
		return $this->tu.'/'.$this->mau;
	}

	public function add($phanso){
		$temp = new Fraction();
		$temp->tu = $this->tu * $phanso->mau + $phanso->tu*$this->mau;
		$temp->mau= $this->mau * $phanso->mau;

		return $temp;


		
	}






}

$phanso1 = new Fraction(1,2);

$phanso2 = new Fraction(4,2);

$phanso3 = new Fraction(1,2);





$phanso3 = $phanso1->add($phanso2);

echo $phanso3->show();










 ?>