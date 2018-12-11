<?php

class Cars {
    
// this is a $variable of the class Cars    
    var $wheel_count = 4;
    var $door_count = 5;
    
function car_door(){
    
    // return will take property out of the function
    /* and we can use variable inside the function with
       parametr $this and variable without dolar sign */
    return "This car has " . $this->door_count . " doors";
    
    }

function car_wheels(){
    return "This car has " . $this->wheel_count . " wheels";    
    }    
}

$bmw = new Cars();
$mercedes = new Cars();

echo $mercedes->door_count;
echo "<br>";

echo $bmw->car_wheels();
echo "<br>";

echo $mercedes->car_door();
echo "<br>";

// we can assign value for the variable right the way
echo $bmw->wheel_count = 8;
echo "<br>";

echo $mercedes->door_count = 10;
echo "<br>";

echo $mercedes->door_count;
echo "<br>";

echo $mercedes->car_door();
echo "<br>";

echo $bmw->car_wheels();