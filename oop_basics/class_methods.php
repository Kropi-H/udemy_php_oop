<?php

class Cars {
    
// definition method
function gretting(){
    
    }    
function working(){
    
    }
    
}

// this will show all methods of the defined class. Here it is Cars class and his method greeting and working
$the_method = get_class_methods('Cars');

foreach ($the_method as $method){
    echo $method . "<br>";
}
