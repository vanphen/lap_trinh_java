<?php


class mang{
	public $thongtin; 

	public function __construct($manga){
		$this->thongtin=$manga;
	}

	public function show(){
		foreach ($this->thongtin as $ten => $cacdiem) {
			echo 'Thứ tự : '.$ten.' <br>';
			foreach ($cacdiem as $monhoc => $d)
				echo "  $monhoc: $d <br>";
			echo '<br>';
		}
	}

}



    $diem = [
        '1' => [
            'Họ Tên' => 'Phạm văn Thạo',
            'Ngày Sinh' => '22/12/2019',
            'Tuổi'  => 20
        ],
        '2' => [
            'Toán' => 7,
            'Lý' => 8,
            'Hóa'  => 8
        ],
        '3' => [
            'Toán' => 9,
            'Lý' => 9,
            'Hóa'  => 9
        ],
    ];


    $show = new mang($diem);

    $show->show();

   


      

?>