<?php

class Cars {
    
    public $wheel_count = 4;
    static $door_count = 5;
    
function __construct(){
    
//    echo $this->wheel_count . "<br>";
    echo self::$door_count++ . "<br>";

    }

function __destruct(){
    
//    echo $this->wheel_count . "<br>";
    echo self::$door_count-- . "<br>";

    }
    
    
//function details(){
//    
//    echo $this->wheel_count . "<br>";
//
//    }    

}

$bmw = new Cars();
$mrcedes = new Cars();
$mrcedes_2 = new Cars();