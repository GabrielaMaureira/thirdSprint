<?php

// SINGLETON PATTERN 

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

// ADAPTER PATTERN

require('poultry.php');

function duck_interaction($duck) {
    $duck->quack();
    $duck->fly();
}

$duck = new Duck;
$turkey = new Turkey;
$turkey_adapter = new TurkeyAdapter($turkey);
echo "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();
echo "The Duck says...\n";
duck_interaction($duck);
echo "The TurkeyAdapter says...\n";
duck_interaction($turkey_adapter);



?>