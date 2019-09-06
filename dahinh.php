<?php 

class SoPhuc{

    public $a;
    public $b;
    public $i;




    public   function __construct($_a,$_b){
        $this->a = $_a;
        $this->b = $_b;
    }
    public function show(){
        echo 'z = '.$this->a.' + '.$this->b.'*i';;
    }

    public function plus($sophuc){
        $a = $this->a + $sophuc->a;
        $b = $this->b+ $sophuc->b;

        return new SoPhuc($a,$b);

    }
    public function sub($sophuc){
        $a = $this->a - $sophuc->a;
        $b = $this->b- $sophuc->b;

        return new SoPhuc($a,$b);

    }
    public function mul($sophuc){
        $a = $this->a* $sophuc->a - $this->b * $sophuc->b;
        $b = $this->a* $sophuc->b + $sophuc->a * $this->b;

            return new SoPhuc($a,$b);
    }
    



}
    
$sophuc = new SoPhuc(1,2);

$sophuc2 = new SoPhuc(1,2);

$sophuc3 = new SoPhuc(1,2);


$sophuc3 = $sophuc->mul($sophuc2);

echo $sophuc3->show();










 ?>