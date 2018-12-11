<?php

class Cars {
    
    Private $wheel_count = 4;
    
function get_values(){
    
    echo $this->wheel_count . "<br>";
    
    }

function set_values(){
    
    $this->wheel_count = 10;
    
    }    

}
$bmw = new Cars;

echo $bmw->set_values();
echo "<br>";

echo $bmw->get_values();
echo "<br>";




