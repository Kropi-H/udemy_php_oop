<?php

class Cars {
    
function greeting(){

    echo "Hello world";
    
    }
}

// create instance and set it in to $karl variable
$karl = new Cars();

$lucias = new Cars();

// activate method greeting for $karl instance
$karl->greeting();

echo "<br>";

$lucias->greeting();