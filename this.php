<?php 

class Car {

    public $color ;
    public $brand ;
    public $firstName ;
    public $lastName;


public function hello() {

        return " Hello my color is " . $this -> color . " my brand is " . $this -> brand ;

    }


public function helloUser() {

return " hello " . $this -> firstName ;


}


}

//instance object
$kereta = new Car ();
$nama = new Car();


//set the values of class properties


$kereta-> color = 'hitam';
$kereta-> brand = 'mercedes';
$nama -> firstName = 'JohnDoe';



//call the car method for $car object.


echo $kereta -> hello();

echo $nama -> helloUser();



?>