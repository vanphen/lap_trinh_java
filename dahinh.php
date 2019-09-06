
<?php 

class SmartPhone{

    public $manhinh;
    public $camera;
    public $banphim;

    // public function __construct($_manhinh,$_camera,$_banphim){
    //     $this->manhinh= $_manhinh;
    //     $this->camera = $_camera;
    //     $this->banphim = $_banphim;

    // }

    public function __construct(){
        echo 'class da duoc khoi tao';
    }

    public function setName($_manhinh,$_camera,$_banphim){
        $this->manhinh = $_manhinh;
        $this->camera = $_camera;
        $this->banphim = $_banphim;

    }
    public function getName(){
      echo    $this->manhinh;
      echo    $this->camera;
      echo        $this->banphim;
    }


}

class TinhToan{

    public $a,$b;

    public function cong($a,$b){

    echo $tong = $a +$b;
    }

    

}



// ham khoi tao class
// $smartphone = new SmartPhone('hoat dong','hong','dang hoat dong');


// echo $smartphone->manhinh;
// echo "<br>";
// echo $smartphone->camera;
// echo "<br>";
// echo $smartphone->banphim;
// echo '<br>';

// //truyen truc tiep cho bien

// $smartphone->manhinh = 'khong hoat dong';

// echo $smartphone->manhinh;

// // set gia tri cho bien

// $smartphone->setName('lai hoat dong binh thuong','van thao','van phen');
// echo '<br>';

// echo $smartphone->getName();

$st = new SmartPhone();

$tinh  = new TinhToan();

$tinh->cong(1,2);

 ?>