<?php

class Cars {
    
    static $wheel_count = 4;

    static $door_count = 5;

static function car_detail(){
    
    echo Cars::$wheel_count . "<br>";
    echo Cars::$door_count . "<br>";
    }

}

//$bmw = new Cars();

//echo $bmw->wheel_count . "<br>";

/* static property can be used in this mode
   we do not need to use instance
   other way it will not work*/
echo Cars::$door_count . "<br>";

Cars::car_detail();

