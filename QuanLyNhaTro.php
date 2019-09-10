<?php 


class NhaTro{
	public $tenphong;
	public $songuoi;
	public $diachi;
	public $giaphong;
	public $dientich;
	const giaphongloai1 =5000000;
	const giaphongloai2 =3000000;
	const giaphongloai3 =1500000;
	const BONUS =500000;





	public function __construct($_tenphong,$_songuoi,$_diachi,$_dientich){
		$this->tenphong = $_tenphong;
		$this->songuoi = $_songuoi;
		$this->diachi = $_diachi;
		$this->dientich = $_dientich;




	}
	public function giaPhong(){

		if($this->dientich>50){
			if($this->songuoi>4){
					$this->giaphong = self::giaphongloai1+($this->songuoi-4)*self::BONUS;
			}
			else{
					$this->giaphong = self::giaphongloai1;
			}
		}else if($this->dientich>=20 && $this->dientich<=50){
			$this->giaphong = self::giaphongloai2;

		}else if($this->dientich<20){
			$this->giaphong = self::giaphongloai3;
		}
	}



	public function show(){
		$this->giaPhong();

		echo 'Tên Phòng : '.$this->tenphong.'<br>'.'Số người ở : '.$this->songuoi.'<br>'.'Diện tích : '.$this->dientich.' m2 <br>'.'Địa chỉ :'.$this->diachi.'<br>'.'Giá Phòng '.$this->giaphong.'<br>';
		

	}

	public function giaTro(){
			$this->giaPhong();
		return $this->giaphong+$this->giadien;
	}
}
class TienChiTieu{
	public $tenloaitien;
	public $soluong;
	public $thongtinphong;

	public function __construct($_thongtinphong,$_tenloaitien,$_soluong){
		$this->tenloaitien = $_tenloaitien;
		$this->soluong = $_soluong;
		$this->thongtinphong = $_thongtinphong;

	}
	public function show(){
		$this->thongtinphong->show();
		echo 'Tên Loại Tiền: '.$this->tenloaitien.'<br>'.'Số Lượng :'.$this->soluong.'<br>';
	}

}
class ThanhToan extends TienChiTieu{

	public $tongtien;
	public $tiennuoc;
	public $tienmang;
	public $tienguixe;
	public $tienvesinh;
	public function __construct(){

		

	}
	public function tiendien($tienchitieu){
		

		if($tienchitieu->soluong>=0 && $tienchitieu->soluong<=50){
			$this->tongtien=$tienchitieu->soluong*2000;
		}else if($tienchitieu->soluong>=51 && $tienchitieu->soluong<=100){
			$this->tongtien=$tienchitieu->soluong*2500;
		}else if($tienchitieu->soluong>=101 && $tienchitieu->soluong<=200){
			$this->tongtien=$tienchitieu->soluong*2700;
		}else if($tienchitieu->soluong>=201 && $tienchitieu->soluong<=300){
			$this->tongtien=$tienchitieu->soluong*3000;
		}else if($tienchitieu->soluong>=301 && $tienchitieu->soluong<=400){
			$this->tongtien=$tienchitieu->soluong*3500;
		}else if($tienchitieu->soluong>=401 && $tienchitieu->soluong<=500){
			$this->tongtien=$tienchitieu->soluong*4000;
		}else if($tienchitieu->soluong>=501){
			$this->tongtien=$tienchitieu->soluong*5000;
		}

		return $this->tongtien;
	}

	public function tiennuoc($tienchitieu){
		$this->tiennuoc = $tienchitieu->thongtinphong->songuoi*15000;
		return $this->tiennuoc;
	}

}
$phongtro = new NhaTro(103,8,'Đại La',60);
$phongtro1 = new NhaTro(104,3,'Gải phóng',40);
$phongtro2 = new NhaTro(105,2,'Đại cồ việt',15);
$phongtro3 = new NhaTro(106,3,'Đại cồ việt',50);

$tienchitieu = new TienChiTieu($phongtro,'Tiền Điện',39);
$tiennuoc = new TienChiTieu($phongtro,'Tiền Nước',0);

$thanhtoan = new ThanhToan();


$tienchitieu->show();

echo $tienchitieu->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tiendien($tienchitieu);
echo '<br>';
echo $tiennuoc->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tiennuoc($tiennuoc);













 ?>