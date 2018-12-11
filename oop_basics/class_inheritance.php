<?php

class Human {
    
    var $feet = 2;
    
function greeting(){

    return "Hello";
    
    }

function car_wheels(){
    
    }    
}

$lucik = new Human();
$karl = new Human();

$karl->greeting();

/* we can extend one class to another
   In this case we extend class Animal
   by class Human*/
class Animal extends Human{

// and we can overwrite inheritanced var     
    var $feet = 4;
}

$jane = new Animal();

// now we can use variable from Human class
echo $jane->feet;

echo "<br>";
// or function from extends class
echo $jane->greeting();