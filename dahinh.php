<?php 

class SoPhuc{

    public $a;
    public $b;





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
    public function div($sophuc){
        $a = ($this->a* $sophuc->a+$this->b*$sophuc->b)/(($this->a)*($this->a)+($this->b)*($this->b));
        $b = ($this->a* $sophuc->b-$this->b*$sophuc->a)/(($this->a)*($this->a)+($this->b)*($this->b));
        return new SoPhuc($a,$b);
    }



}
    
$sophuc = new SoPhuc(1,2);

$sophuc2 = new SoPhuc(1,4);

$sophuc3 = new SoPhuc(1,2);


$sophuc3 = $sophuc->div($sophuc2);

$sophuc3 = $sophuc->plus($sophuc2);

$sophuc3 = $sophuc->sub($sophuc2);

$sophuc3 = $sophuc->mul($sophuc2);
echo $sophuc3->show();










 ?>