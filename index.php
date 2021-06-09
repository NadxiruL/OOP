




<?php 

//buat kelas
class Car {

    //buat property
    public $color = 'blue';
    public $gear = 9;


}

//create instance (represent)
$mercedes = new Car ();
$bmw = new Car ();



//print out

echo 'mercedes is ' . $mercedes -> color . ' color' ;

echo "<br />";

echo 'bmw has  ' . $bmw -> gear . ' gear ' ;


?>
