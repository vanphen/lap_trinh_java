<?php
class Person 
{
    const salary = 100000;
    const salary2 = 1;
    
    public function __construct()
    {
    //Your logic for constructor
    }
  function __call($nameMethod,$hour){
    if($nameMethod == 'caculateSalary')// Tên phương khi gọi
        switch(count($hour))
    {
            case 0 : return self::salary ;  // Không truyền tham số cho hàm     
            case 1 : return self::salary * $hour[0] ;//Truyền 1 tham số
            case 2 : return  (self::salary*$hour[1]);
            
        }
    }
 
} 
 $per = new Person();
 echo "".$per->caculateSalary();            
 $per1 = new Person();
 echo "<br>";
 echo "".$per1->caculateSalary(10);

 echo '<br>';

 echo "".$per1->caculateSalary(10,11);
 ?>