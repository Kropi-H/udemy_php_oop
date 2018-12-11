<?php

class Cars {
    
// public variable can we use in whole program - out of the class    
    public $wheel_count = 4;

// this Private variable can be use only in this class    
    Private $door_count = 5;

// Protected can be use in this class and all the sublclasses for example for extense
    Protected $seat_count = 6;
    
function car_detail(){
    
    echo $this->wheel_count . "<br>";
    echo $this->door_count . "<br>";
    echo $this->seat_count . "<br>";
    }

}

$bmw = new Cars();
$mercedes = new Cars();

//echo $bmw->wheel_count;
//echo $bmw->door_count;
//echo $bmw->seat_count;

$bmw->car_detail();

