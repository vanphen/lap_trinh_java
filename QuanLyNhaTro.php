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
	public $khachtro;





	public function __construct($_tenphong,$_songuoi,$_diachi,$_dientich,$_khachtro){
		$this->tenphong = $_tenphong;
		$this->songuoi = $_songuoi;
		$this->diachi = $_diachi;
		$this->dientich = $_dientich;
		$this->khachtro = $_khachtro;




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
		$this->khachtro->show();
		

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

	public $tiendien;
	public $tiennuoc;
	public $tienmang;
	public $tienguixe;
	public $tienvesinh;

	public function __construct(){

		

	}
	public function tiendien($tienchitieu){
		

		if($tienchitieu->soluong>=0 && $tienchitieu->soluong<=50){
			$this->tiendien=$tienchitieu->soluong*2000;
		}else if($tienchitieu->soluong>=51 && $tienchitieu->soluong<=100){
			$this->tiendien=$tienchitieu->soluong*2500;
		}else if($tienchitieu->soluong>=101 && $tienchitieu->soluong<=200){
			$this->tiendien=$tienchitieu->soluong*2700;
		}else if($tienchitieu->soluong>=201 && $tienchitieu->soluong<=300){
			$this->tiendien=$tienchitieu->soluong*3000;
		}else if($tienchitieu->soluong>=301 && $tienchitieu->soluong<=400){
			$this->tiendien=$tienchitieu->soluong*3500;
		}else if($tienchitieu->soluong>=401 && $tienchitieu->soluong<=500){
			$this->tiendien=$tienchitieu->soluong*4000;
		}else if($tienchitieu->soluong>=501){
			$this->tiendien=$tienchitieu->soluong*5000;
		}

		return $this->tiendien;
	}

	public function tiennuoc($tienchitieu){
		$this->tiennuoc = $tienchitieu->thongtinphong->songuoi*15000;
		return $this->tiennuoc;
	}
	public function tienmang($tienchitieu){
		$this->tienmang = $tienchitieu->thongtinphong->songuoi*50000;
		return $this->tienmang;
	}
	public function tienguixe($tienchitieu){
			$this->tienguixe = $tienchitieu->thongtinphong->songuoi*15000;
		return $this->tienguixe;
	}
	public function tienvesinh($tienchitieu){
			$this->tienvesinh = $tienchitieu->thongtinphong->songuoi*40000;
		return $this->tienvesinh;
	}

	public function tongTien(){
		return ($this->tiendien+$this->tiennuoc+$this->tienmang+$this->tienguixe+$this->tienvesinh);
	}



}


class KhachTro{
	public $thongtinkhach;


	public function __construct($_thongtinkhach){

		$this->thongtinkhach = $_thongtinkhach;
	}

	public function show(){
		foreach ($this->thongtinkhach as $ten => $stt) {
			echo 'Khách : '.$ten.' <br>';
			foreach ($stt as $tieude => $thongtin)
				echo "  $tieude: $thongtin <br>";
			echo '<br>';
		}
	}
}






    $diem = [
        '1' => [
            'Họ Tên' => 'Phạm văn Thạo',
            'Ngày Sinh' => '22/12/2019',
            'Nghề Nghiệp'  => 'Phụ hồ',
            'Quê Quán'=> 'hà nội',
            'Số Điện Thoai'=>12345678,
            'CMND'=>123456789
        ],
        '2' => [
         	'Họ Tên' => 'Hoàng đức huy',
            'Ngày Sinh' => '3/5/1999',
            'Nghề Nghiệp'  => 'Phụ hồ',
            'Quê Quán'=> 'hà tây',
            'Số Điện Thoai'=>123,
            'CMND'=>1234
        ],
        '3' => [
         	 'Họ Tên' => 'Nguyễn Minh Thành',
            'Ngày Sinh' => '12/3/1996',
            'Nghề Nghiệp'  => 'Phụ hồ',
            'Quê Quán'=> 'hà nam',
            'Số Điện Thoai'=>12345,
            'CMND'=>1234567
        ],
    ];


    $show = new KhachTro($diem);




$phongtro = new NhaTro(103,8,'Đại La',60,$show);


$tienchitieu = new TienChiTieu($phongtro,'Tiền Điện',39);
$tiennuoc = new TienChiTieu($phongtro,'Tiền Nước',0);
$tienmang = new TienChiTieu($phongtro,'Tiền Mạng',0);
$tienguixe = new TienChiTieu($phongtro,'Tiền Gửi Xe',0);
$tienvesinh = new TienChiTieu($phongtro,'Tiền Vệ Sinh',0);

$thanhtoan = new ThanhToan();



$tienchitieu->show();

echo $tienchitieu->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tiendien($tienchitieu);
echo '<br>';
echo $tiennuoc->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tiennuoc($tiennuoc);
echo '<br>';

echo $tienmang->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tienmang($tienmang);
echo '<br>';

echo $tienguixe->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tienguixe($tienguixe);
echo '<br>';
echo $tienvesinh->tenloaitien.' mà bạn phải trả là :'.$thanhtoan->tienvesinh($tienvesinh);
echo '<br>';

echo 'Tổng chi tiêu chi phí của phòng là :'.$thanhtoan->tongTien();











 ?>