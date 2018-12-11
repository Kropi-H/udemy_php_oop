<?php

// definition of the class
class Cars {
    
    
    
    
}

// show all classes on the end we will see our Cars class
$my_classes = get_declared_classes();

foreach ($my_classes as $class){
    echo $class . "<br>";
}