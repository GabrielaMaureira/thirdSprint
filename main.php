<?php

require('tigger.php');

$tigger1 = Tigger::getInstance();
$tigger2 = Tigger::getInstance();
testing($tigger1, $tigger2);

function testing($tigger1, $tigger2){

    if ($tigger1 === $tigger2) { // === identical
        echo "Singleton pattern works, both variables contain the same instance. \n";
    } else {
        echo "Error";
    }
}

Tigger::roar(); 
Tigger::roar();
Tigger::roar();
Tigger::roar();
Tigger::getCounter();



?>