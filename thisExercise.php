<?php 

class User {


    public $firstName ;
    public $lastName;


public function helloUser() {

return " hello , my first name is " .  $this->firstName . " and my last name is " . $this->lastName;



    }


}

//instance object , satu object mewakili lain lain values.
$person1 = new User();

$person2 = new User();


//set the values of class properties

$person1 -> firstName ;
$person1 -> lastName ;
$person2 -> firstName ;
$person2 -> lastName ;



//call the car method for $car object.

echo $person1 -> helloUser(); 

echo "<br>" ;

echo $person2 -> helloUser();



?>