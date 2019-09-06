<?php 
class phen{

	public $name;

	public function __construct($_name){
	 return $this->name = $_name;
	}

	public function  setname($_name){
	  	$this->name = $_name;
	}
	public function getname(){
		return $this->name ;
	} 
	public function alo(){
		
		echo "thong bao day la ". $this->name;
	}

	public function alo2($name){
		echo "thong bao " . $name;
	}
	public function alo3(){
		echo "Thong bao".$this->getname();
	}


}


// khoi tao
$thongtin = new phen("thanh123");
echo $thongtin->name;
echo "<br>";
// cach 1 truyen truc tiep
$thongtin->name = "phen";

echo $thongtin->name;
echo "<br>";
// cach 2
 $thongtin->setname("thanh");

echo $thongtin->name;
echo "<br>";

// goi hamm
// goi ham
$thongtin->alo(); 
echo "<br>";

$thongtin->alo2("tai");
echo "<br>";


$thongtin->alo3();

//  ?>